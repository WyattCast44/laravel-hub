<?php

namespace App\Services\GitHub;

use Illuminate\Support\Arr;
use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\Facades\Cache;
use App\Traits\ConsumesExternalServices;

class Client
{
    use ConsumesExternalServices;

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

    public function isValidRepoUrl(string $url)
    {
        $url = $url . $url;
        
        $this->get("repos/");
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
