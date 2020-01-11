<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use App\Jobs\ImportGitHubRepo;

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
        $repos = auth()->user()->getRepos();

        $unsyncedRepos = collect();

        $syncedRepos = collect();

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
            ImportGitHubRepo::dispatch($repo);
        });

        $message = ($repos->count() > 1)
                    ? "Successfully submitted {$repos->count()} packages."
                    : "Successfully submitted {$repos->first()}.";

        flash('status', 'success', $message);

        return redirect()->route('app.packages.index');
    }

    public function show($vendor, Package $package)
    {
        return view('packages.show', [
            'package' => $package,
        ]);
    }
}
