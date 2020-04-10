<?php

namespace Tests\Unit;

use App\Services\Github;
use Tests\TestCase;

class GitHubTest extends TestCase
{
    public function test_it_can_validate_a_repo_url()
    {
        $client = app(Github::class);

        $valid_url_http = 'http://github.com/laravel/laravel';

        $valid_url_https = 'https://github.com/laravel/laravel';

        $invalid_url = 'https://tailwindcss.com/';

        $invalid_github_url = 'https://github.com/totally-fake-user/with-totally-fake-repo';

        $this->assertTrue($client->validateRepoUrl($valid_url_http));

        $this->assertTrue($client->validateRepoUrl($valid_url_https));

        $this->assertFalse($client->validateRepoUrl($invalid_url));

        $this->assertFalse($client->validateRepoUrl($invalid_github_url));
    }
}
