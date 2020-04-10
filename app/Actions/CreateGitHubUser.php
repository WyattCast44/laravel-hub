<?php

namespace App\Actions;

use App\User;
use App\Services\Github;
use Spatie\QueueableAction\QueueableAction;

class CreateGitHubUser
{
    use QueueableAction;

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

        $github_user = $this->client->user($username);

        $user = User::create([
            'username' => $username,
            'name' => $github_user['name'],
            'email' => $github_user['email'],
            'avatar' => $github_user['avatar_url'],
            'auth_provider' => 'github',
            'auth_type' => 'user',
            'unclaimed' => true,
            'bio' => $github_user['bio'],
            'blog' => $github_user['blog'],
            'meta' => json_encode($github_user),
        ]);

        return $user;
    }
}
