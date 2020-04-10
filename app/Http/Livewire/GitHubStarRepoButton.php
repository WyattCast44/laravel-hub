<?php

namespace App\Http\Livewire;

use App\Package;
use Livewire\Component;

class GitHubStarRepoButton extends Component
{
    public $package_id;

    public function mount($package)
    {
        $this->package_id = $package->id;
    }

    public function handle()
    {
        logger('star on github', ['package' => $this->package()]);
    }

    public function render()
    {
        return view('livewire.git-hub-star-repo-button', [
            'package' => $this->package(),
        ]);
    }

    public function package()
    {
        return Package::findOrFail($this->package_id);
    }
}
