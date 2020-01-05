<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create']);
    }
    
    public function index()
    {
        $packages = Package::with(['user'])->get();

        return view('packages.index', [
            'packages' => $packages,
        ]);
    }

    public function create()
    {
        return view('packages.create');
    }
}
