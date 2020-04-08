<?php

namespace App\Actions;

use App\User;
use App\Services\GitHub;
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
    public function __construct(GitHub $client)
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
            'bio' => $organization['bio'],
            'blog' => $organization['blog'],
            'meta' => json_encode($organization),
        ]);

        return $user;
    }
}
