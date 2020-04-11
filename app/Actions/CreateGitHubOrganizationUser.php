<?php

namespace App\Actions;

use App\User;
use App\Services\Github;
use Spatie\QueueableAction\QueueableAction;

class CreateGitHubOrganizationUser
{
    use QueueableAction;

    protected $client;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct(Github $client)
    {
        $this->client = $client;
    }

    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute(string $username)
    {
        $user = User::where('username', $username)->first();

        if ($user != null) {
            return $user;
        }

        $organization = $this->client->user($username);

        $user = User::create([
            'username' => $username,
            'name' => $organization['name'],
            'email' => $organization['email'],
            'avatar' => $organization['avatar_url'],
            'auth_provider' => 'github',
            'auth_type' => 'organization',
            'unclaimed' => true,
            'bio' => $organization['bio'],
            'blog' => $organization['blog'],
            'meta' => json_encode($organization),
        ]);

        return $user;
    }
}
