<?php

namespace App\Actions;

use App\Package;
use App\Services\Github;
use Spatie\QueueableAction\QueueableAction;

class ResyncPackage
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
    public function execute(Package $package)
    {
        $repo = $this->client->repo($package->vendor, $package->name);

        $package->update([
            'name' => $repo['name'],
            'description' => $repo['description'],
            'repo_url' => $repo['html_url'],
            'language' => $repo['language'],
            'stars_count' => $repo['stargazers_count'],
            'last_synced_at' => now(),
            'meta' => json_encode($repo, JSON_PRETTY_PRINT),
        ]);

        (new ResyncPackageReadme($this->client))->onQueue()->execute($package);

        return $package;
    }
}
