<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }
    
    public function index()
    {
        $packages = Package::with(['user'])->paginate();

        return view('packages.index', [
            'packages' => $packages,
        ]);
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($vendor, Package $package)
    {
        return view('packages.show', [
            'package' => $package,
        ]);
    }
}
