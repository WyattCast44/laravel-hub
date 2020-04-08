<?php

namespace App\Services;

use App\Package;
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

    public function getUserRepos($username)
    {
        $client = new Client();

        $response = $client->request('GET', "{$this->baseUrl}/users/{$username}/repos?type=all");

        $data = json_decode($response->getBody()->getContents());

        return $data;
    }

    public function importPackageReadme(Package $package)
    {
        $fullName = "{$package->vendor}/{$package->name}";

        $client = new Client();

        $response = $client->request('GET', "{$this->baseUrl}/repos/{$fullName}/readme");

        return base64_decode(json_decode($response->getBody()->getContents())->content);
    }
}