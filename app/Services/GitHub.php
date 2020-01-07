<?php

namespace App\Services;

use GuzzleHttp\Client;

class GitHub
{
    protected $baseUrl = "https://api.github.com";

    protected $reposUrl = "https://api.github.com/repos";

    /**
     * Check if a repo exists and we can access the info
     *
     * @return bool
     */
    public function doesRepoExist(string $name)
    {
        $client = new Client();

        $response = $client->request('GET', "{$this->reposUrl}/{$name}");

        return $response->getBody();
    }
}