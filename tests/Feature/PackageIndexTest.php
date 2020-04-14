<?php

namespace Tests\Feature;

use App\Package;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PackageIndexTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_packages_are_shown_on_index()
    {
        $packages = factory(Package::class, 5)->create();

        $response = $this->get(route('app.packages.index'));

        $response->assertOk();

        $packages->each(function ($package) use ($response) {
            $response->assertSee($package->name);
        });
    }

    public function test_a_guest_is_redirected_to_login_when_submitting_package()
    {
        $response = $this->get(route('app.packages.create'));

        $response->assertRedirect('/login');
    }

    public function test_a_authenticated_user_can_see_submit_page()
    {
        $this->signIn();

        $this->get(route('app.packages.create'))
            ->assertOk();
    }
}
