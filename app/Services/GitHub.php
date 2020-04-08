<?php

namespace App\Services;

use Illuminate\Support\Str;
use GitHub\Client as GitHubClient;

/**
 * @link https://github.com/KnpLabs/php-github-api
 */
class GitHub
{
    protected $client;
    
    public function __construct(GitHubClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get named API client
     */
    public function api($api)
    {
        return $this->client->api($api);
    }

    /**
     * Get a users details by username
     *
     * @link https://github.com/KnpLabs/php-github-api/blob/master/doc/users.md
     * @source https://github.com/tightenco/novapackages/blob/master/app/Http/Remotes/GitHub.php
     */
    public function user($username)
    {
        return $this->api('users')->show($username);
    }

    public function repo($username, $reponame)
    {
        return $this->api('repo')->show($username, $reponame);
    }

    /**
     * Return true if the given url is valid, publicly
     * accessible repo
     *
     * @param [string] $url
     * @return boolean
     */
    public function isValidRepoUrl($url)
    {
        if (! Str::startsWith($url, 'https://github.com')) {
            return false;
        }

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
