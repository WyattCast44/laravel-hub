<?php

namespace App\Services\GitHub;

use GuzzleHttp\Client as HttpClient;
use App\Traits\ConsumesExternalServices;

class Client
{
    use ConsumesExternalServices;

    /**
     * The Guzzle HTTP Client instance.
     *
     * @var \GuzzleHttp\Client
     */
    public $guzzle;

    /**
     * Number of seconds a request is retried.
     *
     * @var int
     */
    public $timeout = 30;

    public function __construct(HttpClient $guzzle = null)
    {
        $this->ensureGuzzleIsSetup($guzzle);

        return $this;
    }

    /**
     * Setup the guzzle request object
     *
     * @param $guzzle
     * @return $this
     */
    public function ensureGuzzleIsSetup($guzzle)
    {
        $this->guzzle = $guzzle ?: new HttpClient([
            'base_uri' => 'https://api.github.com/',
            'http_errors' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
        
        return $this;
    }

    /**
     * Get the timeout
     *
     * @return  int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function getRepoDetails()
    {
        //
    }

    public function getRepoReadme()
    {
        //
    }

    public function getUserRepos()
    {
        //
    }

    /**
     * Undocumented function
     * @link https://developer.github.com/v3/repos/branches/
     *
     * @return void
     */
    public function getRepoBranches()
    {
        //
    }

    /**
     * Undocumented function
     * @link https://developer.github.com/v3/repos/collaborators/
     *
     * @return void
     */
    public function getRepoCollaborators()
    {
        //
    }

    /**
     * Undocumented function
     * @link https://developer.github.com/v3/repos/contents/
     *
     * @return void
     */
    public function getRepoContents()
    {
        //
    }

    /**
     * Undocumented function
     * @link https://developer.github.com/v3/repos/releases/
     *
     * @return void
     */
    public function getRepoReleases()
    {
        //
    }
}
