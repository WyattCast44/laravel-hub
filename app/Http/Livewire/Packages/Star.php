<?php

namespace App\Http\Livewire\Packages;

use App\Package;
use Livewire\Component;

class Star extends Component
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
        return view('livewire.packages.star', [
            'package' => $this->package(),
        ]);
    }

    public function package()
    {
        return Package::findOrFail($this->package_id);
    }
}
