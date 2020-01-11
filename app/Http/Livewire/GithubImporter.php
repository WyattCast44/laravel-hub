<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GithubImporter extends Component
{
    public function mount()
    {
        $this->fetchRepos();
    }

    public function render()
    {
        return view('livewire.github-importer');
    }

    protected function fetchRepos()
    {
        $user = auth()->user();

        $token = $user->auth_token;
    }
}
