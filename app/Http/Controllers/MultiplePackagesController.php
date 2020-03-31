<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplePackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('packages.multiple.create');
    }
}
