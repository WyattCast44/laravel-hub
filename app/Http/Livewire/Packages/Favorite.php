<?php

namespace App\Http\Livewire\Packages;

use App\Package;
use Livewire\Component;

class Favorite extends Component
{
    public $package_id;

    public function mount($package)
    {
        $this->package_id = $package->id;
    }

    public function favorite()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }

        auth()->user()->favorite($this->package());
    }

    public function unfavorite()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }

        auth()->user()->unfavorite($this->package());
    }

    public function render()
    {
        return view('livewire.packages.favorite', [
            'package' => $this->package(),
        ]);
    }

    public function package()
    {
        return Package::findOrFail($this->package_id)->loadCount('favorites');
    }
}
