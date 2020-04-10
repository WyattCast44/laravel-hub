<?php

namespace App\Actions;

use App\Package;
use App\Services\GitHub;
use App\User;
use Spatie\QueueableAction\QueueableAction;

class ProcessSubmittedPackage
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
    public function execute($username, $repo)
    {
        // Get the repo details
        $repo = $this->client->repo($username, $repo);

        // Get the repo owner type
        $owner_type = $repo['owner']['type'];

        // Get the repo owner username
        $owner_username = $repo['owner']['login'];

        // Look for the owner in the database
        $owner = User::where('username', $owner_username)->first();

        if ($owner == null && $owner_type == "Organization") {

            // The package owner is an org and does not have an account
            // We will create it
            $owner = (new CreateGitHubOrganizationUser($this->client))
                ->execute($owner_username);
        } elseif ($owner == null && $owner_type == "User") {

            // The package owner is a user and does not have an account,
            // what to do...
            $owner = (new CreateGitHubUser($this->client))->execute($owner_username);
        }

        $owner = User::where('username', $owner_username)->first();

        $package = Package::create([
            'user_id' => $owner->id,
            'submitter_id' => (auth()->check()) ? auth()->id() : null,
            'name' => $repo['name'],
            'vendor' => $owner_username,
            'display_name' => $repo['name'],
            'description' => $repo['description'],
            'repo_url' => $repo['html_url'],
            'official' => ($owner_username == "laravel") ? true : false,
            'parsed_readme' => null,
            'language' => $repo['language'],
            'stars_count' => $repo['stargazers_count'],
            'last_synced_at' => now(),
            'meta' => json_encode($repo),
        ]);

        return $package;
    }
}
