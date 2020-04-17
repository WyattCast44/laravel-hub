<?php

namespace App\Http\Livewire\Packages;

use App\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPage = 10;

    public $search = '';

    protected $query = null;

    protected $updatesQueryString = [
        'search'
    ];

    protected function initQuery()
    {
        // Init the query if needed
        if ($this->query == null) {
            $this->query = Package::query();
        }

        // Add a search if needed
        if ($this->search) {
            $this->query = Package::search($this->search);
        } else {
            $this->query = Package::latest()
                ->with(['user', 'favorites']);
        }
    }

    public function mount()
    {
        $this->fill(request()->only('search'));
    }

    public function render()
    {
        return view('livewire.packages.index', [
            'packages' => $this->packages(),
        ]);
    }

    public function packages()
    {
        // Init the query if needed
        if ($this->query == null) {
            $this->query = Package::query();
        }

        // Add a search if needed
        if ($this->search) {
            $this->query = Package::search($this->search);
        } else {
            $this->query = Package::latest()
                ->with(['user', 'favorites']);
        }

        return $this->query->paginate($this->perPage);
    }

    public function addLanguageFilter()
    {
        $this->query = $this->query->where('language', 'Python');
    }

    public function paginationView()
    {
        return 'partials.pagination';
    }
}
