<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_homepage()
    {
        $this->get(route('index'))->assertOk();
    }

    public function test_searchpage()
    {
        $this->get(route('search'))->assertOk();
    }
}