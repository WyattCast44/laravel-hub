<?php

namespace App\Services;

use App\Package;
use Illuminate\Support\Str;
use GitHub\Client as GitHubClient;

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
            return false;
        }
    }
}
