<?php

namespace App\Http\Livewire;

use App\Package;
use Livewire\Component;

class PackagesPage extends Component
{
    public function render()
    {
        return view('livewire.packages-page', [
            'packages' => $this->packages(),
            'filters' => $this->filters(),
        ]);
    }

    public function packages()
    {
        $packages = Package::with(['user'])->paginate();

        return $packages;
    }

    public function filters()
    {
        return collect([
            'Official',
            'Community',
        ]);
    }
}
