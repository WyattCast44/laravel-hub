<?php

namespace App\Http\Livewire;

use App\Package;
use Livewire\Component;

class PackageFavoriteButton extends Component
{
    public $package_id;

    public function mount($package)
    {
        $this->package_id = $package->id;
    }

    public function favorite()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        auth()->user()->favorite($this->package());
    }

    public function unfavorite()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        auth()->user()->unfavorite($this->package());
    }

    public function render()
    {
        return view('livewire.package-favorite-button', [
            'package' => $this->package(),
        ]);
    }

    public function package()
    {
        return Package::findOrFail($this->package_id)->loadCount('favorites');
    }
}
