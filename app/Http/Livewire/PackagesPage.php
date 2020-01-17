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
        ]);
    }

    public function packages()
    {
        return Package::paginate();
    }
}
