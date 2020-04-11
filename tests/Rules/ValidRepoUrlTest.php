<?php

namespace Tests\Rules;

use Tests\TestCase;
use App\Services\Github;
use App\Rules\ValidRepoUrl;

class ValidRepoUrlTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_validates_urls_properly(Github $client)
    {
        $this->assertTrue((new ValidRepoUrl($client))->passes('url', 'https://github.com/laravel/laravel'));

        $this->assertFalse((new ValidRepoUrl($client))->passes('url', 'https://github.com/totally-fake-user/with-totally-fake-repo'));
    }
}