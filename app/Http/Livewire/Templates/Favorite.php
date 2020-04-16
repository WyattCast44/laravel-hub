<?php

namespace App\Http\Livewire\Templates;

use App\Template;
use Livewire\Component;

class Favorite extends Component
{
    public $template_id;

    public function mount($template)
    {
        $this->template_id = $template->id;
    }

    public function favorite()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }

        auth()->user()->favorite($this->template());
    }

    public function unfavorite()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login');
        }

        auth()->user()->unfavorite($this->template());
    }

    public function render()
    {
        return view('livewire.templates.favorite', [
            'template' => $this->template(),
        ]);
    }

    public function template()
    {
        return Template::findOrFail($this->template_id)->loadCount('favorites');
    }
}
