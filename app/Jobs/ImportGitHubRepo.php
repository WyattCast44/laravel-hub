<?php

namespace App\Jobs;

use App\Services\GitHub;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportGitHubRepo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $repo;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($repo)
    {
        $this->repo = $repo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(GitHub $gitHub)
    {
        $this->ensureValidRepo();
    }

    protected function ensureValidRepo()
    {
        //
    }
}
