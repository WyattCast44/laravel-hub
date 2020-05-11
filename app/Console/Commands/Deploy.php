<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Deploy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A command deploy command I can use in my local env and on forge';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->callSilent('storage:link');
        $this->callSilent('optimize:clear');
        $this->callSilent('migrate', ['--force']);
        $this->callSilent('telescope:publish');
        $this->callSilent('scout:flush', ['model' => "App\Package"]);
        $this->callSilent('scout:import', ['model' => "App\Package"]);
        
        if (app()->environment() == "production") {
            $this->callSilent('optimize');
        }
    }
}
