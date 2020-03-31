<?php

namespace App\Http\Controllers;

use App\Package;
use App\Rules\IsGitHubUrl;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|in:php,js,other',
            'url' => ['required', 'string', new IsGitHubUrl],
        ]);

        $url = $request->url;

        flash('status', 'success', 'Package submitted! We are processing it now.');

        return redirect()->route('app.packages.index');
    }

    public function show($vendor, Package $package)
    {
        return view('packages.show', [
            'package' => $package,
        ]);
    }
}

// $repos = collect($request->repos)->each(function ($repo) {
//     ImportGitHubRepo::dispatch($repo);
// });
// $message = ($repos->count() > 1)
//             ? "Successfully submitted {$repos->count()} packages."
//             : "Successfully submitted {$repos->first()}.";
// flash('status', 'success', $message);
