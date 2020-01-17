<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class TemplatesFavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }

    public function store(Template $template)
    {
        auth()->user()->favorite($template);

        flash('status', 'success', 'Template favorited!');

        return redirect()->route('app.templates.show', $template);
    }

    public function delete(Template $template)
    {
        auth()->user()->unfavorite($template);

        flash('status', 'success', 'Favorite Removed!');

        return redirect()->route('app.templates.show', $template);
    }
}
