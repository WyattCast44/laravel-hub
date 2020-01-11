<?php

namespace App\Http\Controllers;

use App\Package;
use App\Services\GitHub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $repos = collect(auth()->user()->getRepos());

        return view('packages.create', [
            'repos' => $repos,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'repos' => 'required|array',
        ]);

        $repos = collect($request->repos)->each(function ($repo) {
            // Do work
        });

        flash('status', 'success', "Successfully submitted {$repos->count()} package(s)!");

        return redirect()->route('app.packages.index');
    }

    public function show($vendor, Package $package)
    {
        return view('packages.show', [
            'package' => $package,
        ]);
    }
}
