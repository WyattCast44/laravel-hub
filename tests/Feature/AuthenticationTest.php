<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_authenicated_user_is_redirected_to_the_home_page_if_they_visit_login()
    {
        $this->signIn();

        $this->get('/login')->assertRedirect(route('index'));
    }
}
