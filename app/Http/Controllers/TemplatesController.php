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
        $templates = Template::with(['user'])->get();

        return view('templates.index', [
            'templates' => $templates,
        ]);
    }

    public function create()
    {
        return view('templates.create');
    }
}
