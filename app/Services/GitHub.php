<?php

namespace App\Services;

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
}
