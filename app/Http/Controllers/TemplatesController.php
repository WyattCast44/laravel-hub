<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index()
    {
        $templates = Template::with(['user', 'favorites'])->latest()->paginate();

        return view('templates.index', [
            'templates' => $templates,
        ]);
    }

    public function show(Template $template)
    {
        $template->load(['user', 'favorites']);

        return view('templates.show.index', [
            'template' => $template,
        ]);
    }

    public function create()
    {
        return view('templates.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|alpha_num|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        $template = Template::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        flash('status', 'success', 'Template created!');

        return redirect()->route('app.templates.show', $template);
    }
}
