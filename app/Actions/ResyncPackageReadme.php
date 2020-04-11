<?php

namespace App\Actions;

use App\Package;
use App\Services\Github;
use Spatie\QueueableAction\QueueableAction;

class ResyncPackageReadme
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
        // Never parsed, need to do first time sync
        if ($package->parsed_readme == null) {
            $markdown = $this->client->repoReadme($package->vendor, $package->name, true);

            $package->update([
                'parsed_readme' => $markdown,
                'readme_last_parsed_at' => now(),
            ]);

            return;
        }

        // Has been parsed need to check if limit for reparse has passed

        $limit = 30; // minutes

        $diff = $package->readme_last_parsed_at->diffInMinutes(now());

        if ($diff < $limit) {
            return;
        }

        $markdown = $this->client->repoReadme($package->vendor, $package->name, true);

        $package->update([
            'parsed_readme' => $markdown,
            'readme_last_parsed_at' => now(),
        ]);

        return;
    }
}
