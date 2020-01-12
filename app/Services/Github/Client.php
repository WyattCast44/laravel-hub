<?php

namespace App\Services\GitHub;

use Illuminate\Support\Arr;
use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\Facades\Cache;
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

    public function __construct($token = null, HttpClient $guzzle = null)
    {
        $this->ensureGuzzleIsSetup($token, $guzzle);

        return $this;
    }

    /**
     * Setup the guzzle request object
     *
     * @param $guzzle
     * @return $this
     */
    public function ensureGuzzleIsSetup($token, $guzzle)
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        if ($token != null) {
            $headers['Authorization'] = "Bearer {$token}";
        }

        $this->guzzle = $guzzle ?: new HttpClient([
            'base_uri' => 'https://api.github.com/',
            'http_errors' => false,
            'headers' => $headers
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

    /**
     * Get an array of the usernames public repos
     *
     * @param string $username
     * @return array
     */
    public function getUserRepos($username)
    {
        $key= "github:{$username}:repos";
        
        if (cache()->has($key)) {
            return cache()->get($key);
        }

        $page = 1;
        $result = [];
        $results = [];

        do {
            $result = $this->get("users/{$username}/repos?page={$page}");
            
            if (gettype($result) === "array") {
                $page = $page + 1;
                array_push($results, $result);
            } else {
                $result = [];
            }
        } while ($result !== []);

        $results = Arr::collapse($results);

        Cache::put($key, $results, now()->addMinutes(5));

        return cache()->get($key);
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
