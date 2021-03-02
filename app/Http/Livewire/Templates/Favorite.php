<?php

namespace App\Http\Livewire\Templates;

use App\Domain\Templates\Models\Template;
use Livewire\Component;

class Favorite extends Component
{
    public $template;

    public function mount(Template $template)
    {
        $this->template = $template;

        $this->template->loadCount('favorites');
    }

    public function favorite()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }

        auth()->user()->favorite($this->template);
    }

    public function unfavorite()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }

        auth()->user()->unfavorite($this->template);
    }

    public function render()
    {
        return view('livewire.templates.favorite', [
            'template' => $this->template,
        ]);
    }
}
