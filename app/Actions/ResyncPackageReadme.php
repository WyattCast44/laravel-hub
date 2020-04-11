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
        // The business logic goes here.
    }
}
