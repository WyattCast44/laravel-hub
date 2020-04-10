<?php

namespace App\Actions;

use App\Services\Github\Github;
use Spatie\QueueableAction\QueueableAction;

class ParseAndCachePackageReadme
{
    use QueueableAction;

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
    public function execute()
    {
        // The business logic goes here.
    }
}
