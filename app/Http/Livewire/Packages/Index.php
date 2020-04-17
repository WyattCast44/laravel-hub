<?php

namespace App\Http\Livewire\Packages;

use App\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = null;

    public $perPage = 10;

    protected $updatesQueryString = [
        'search',
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.packages.index', [
            'packages' => $this->packages(),
        ]);
    }

    public function packages()
    {
        if ($this->search) {
            $packages = Package::search($this->search)
                ->paginate($this->perPage);
        } else {
            $packages = Package::latest()
                ->with(['user', 'favorites'])
                ->paginate($this->perPage);
        }

        return $packages;
    }
}
