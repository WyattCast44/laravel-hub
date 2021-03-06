<?php

namespace App\Services;

use Illuminate\Support\Str;
use GitHub\Client as GitHubClient;
use Github\HttpClient\Message\ResponseMediator;
use Illuminate\Mail\Markdown;

/**
 * @link https://github.com/KnpLabs/php-github-api
 */
class Github
{
    /***
     * @var \Github\Client
     */
    protected $client;

    public function __construct(GitHubClient $client)
    {
        $this->client = $client;
    }

    public function api(string $name)
    {
        return $this->client->api($name);
    }

    /**
     * Get a users details by username
     *
     * @link https://github.com/KnpLabs/php-github-api/blob/master/doc/users.md
     */
    public function user($username)
    {
        return $this->client->api('users')->show($username);
    }

    /**
     * Get a repo by username and repo name
     * 
     * @link https://github.com/KnpLabs/php-github-api/blob/master/doc/repos.md#get-extended-information-about-a-repository
     */
    public function repo($username, $repo)
    {
        return $this->client->api('repo')->show($username, $repo);
    }

    /**
     * Get a collection of topics for the repo
     * or empty collection if no topics set
     * 
     * @param string $username
     * @param string $repo
     * @return \Illuminate\Support\Collection
     */
    public function repoTopics($username, $repo)
    {
        return collect($this->client->api('repo')->topics($username, $repo)['names']);
    }

    /**
     * Get a collection of branches for the repo
     * 
     * @param string $username
     * @param string $repo
     * @return \Illuminate\Support\Collection
     */
    public function repoBranches($username, $repo)
    {
        return collect($this->client->api('repo')->branches($username, $repo));
    }

    /**
     * Get the contents of a repos readme
     *
     * @param string $username
     * @param string $repo
     * @param boolean $compileMarkdown
     * @return string
     */
    public function repoReadme($username, $repo, $compileMarkdown = false)
    {
        try {
            $content = base64_decode($this->client->api('repo')->contents()->readme($username, $repo)['content']);

            if ($compileMarkdown) {
                try {
                    $parsed = Markdown::parse($content);

                    $content = $parsed;
                } catch (\Exception $e) {
                    report($e);
                }
            }

            return $content;
        } catch (\Exception $e) {
            report($e);

            return null;
        }
    }

    /**
     * Validate that repo exists and is
     * publicly accessible at the given url
     *
     * @param [string] $url
     * @return void
     */
    public function validateRepoUrl($url)
    {
        if (!Str::startsWith($url, ['https://github.com', 'http://github.com'])) {
            return false;
        }

        $url = Str::replaceFirst('http://', 'https://', $url);

        $parts = explode('/', Str::after($url, 'https://github.com/'));

        if (count($parts) != 2) {
            return false;
        }

        try {
            $this->repo($parts[0], $parts[1]);
            return true;
        } catch (\Exception $e) {
            throw $e;
            report($e);
            return false;
        }
    }

    public function starRepo($vendor, $repo)
    {
        if (!auth()->check()) {
            return false;
        }

        $res = $this->client->getHttpClient()->put('/user/starred/laravel/homestead');

        $content = ResponseMediator::getContent($res);

        dd($content);
    }
}
