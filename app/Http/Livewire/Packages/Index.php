<?php

namespace App\Http\Livewire\Packages;

use App\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $page = 1;

    public $perPage = 5;

    public $search = '';

    protected $query = null;

    protected $totalPages = 1;

    // protected $updatesQueryString = [
    //     'search'
    // ];

    protected $updatesQueryString = [
        ['search' => ['except' => '']],
        ['page' => ['except' => 1]],
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

        $packages = $this->query->paginate($this->perPage);

        $this->totalPages = $packages->lastPage();

        return $packages;
    }

    public function addLanguageFilter()
    {
        $this->query = $this->query->where('language', 'Python');
    }

    public function paginationView()
    {
        return 'partials.pagination';
    }

    public function updatedSearch() {
        $this->gotoPage(1);
    }

    /* Fix nextPage/previousPage to disallow overflows */
    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page = $this->page - 1;
        }
    }

    public function nextPage()
    {
        if ($this->page < $this->totalPages) {
            $this->page = $this->page + 1;
        }
    }
}
