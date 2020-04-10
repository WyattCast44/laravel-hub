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
        $parts = explode('/', Str::after($url, 'https://github.com/'));

        $vendor = $parts[0];
        $repo = $parts[1];
    }
}
