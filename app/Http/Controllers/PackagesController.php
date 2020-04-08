<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\IsValidGitHubRepoUrl;
use App\Actions\ProcessSubmittedPackage;

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

    public function show($vendor, Package $package)
    {
        return view('packages.show', [
            'package' => $package,
        ]);
    }

    public function store(Request $request, ProcessSubmittedPackage $action)
    {
        $this->validate($request, [
            'type' => ['required', 'in:php,js,other'],
            'url' => ['required', 'string', new IsValidGitHubRepoUrl],
        ]);

        $parts = explode('/', Str::after($request->url, 'https://github.com/'));

        $package = $action->execute($parts[0], $parts[1]);

        flash('status', 'success', 'Package submitted! We are processing it now.');

        return redirect()->route('app.packages.show', ['vendor' => $package->vendor, 'package' => $package]);
    }

    public function delete($vendor, Package $package)
    {
        $package->delete();

        return redirect()->route('app.packages.index');
    }
}
