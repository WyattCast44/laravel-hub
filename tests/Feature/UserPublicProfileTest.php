<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserPublicProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_has_a_overview_page()
    {
        $user = $this->signIn();

        $this->get(route('app.users.show', $user))
            ->assertOk()
            ->assertSee($user->name);
    }

    public function test_a_user_has_a_favorites_page()
    {
        $user = $this->signIn();

        $this->get(route('app.users.favorites.show', $user))->assertOk();
    }

    public function test_a_user_has_a_packages_page()
    {
        $user = $this->signIn();

        $this->get(route('app.users.packages.show', $user))->assertOk();
    }

    public function test_a_user_has_a_templates_page()
    {
        $user = $this->signIn();

        $this->get(route('app.users.templates.show', $user))->assertOk();
    }
}
