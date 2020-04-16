<?php

namespace App\Services;

use Illuminate\Support\Str;

class Repo
{
    public function __construct(Github $client)
    {
        $this->client = $client;
    }

    public static function fromUrl(string $url)
    {
        // $valid = $this->client->validateRepoUrl($url);

        // if (!$valid) {
        //     return null;
        // }

        $parts = explode('/', Str::after($url, 'https://github.com/'));

        $vendor = $parts[0];
        $repo = $parts[1];
    }
}
