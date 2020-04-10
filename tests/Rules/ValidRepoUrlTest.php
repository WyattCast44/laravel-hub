<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Rules\ValidRepoUrl;

class ValidRepoUrlTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_validates_urls_properly()
    {
        $this->assertTrue((new ValidRepoUrl())->passes('url', 'https://github.com/laravel/laravel'));

        $this->assertFalse((new ValidRepoUrl())->passes('url', 'https://github.com/totally-fake-user/with-totally-fake-repo'));
    }
}
