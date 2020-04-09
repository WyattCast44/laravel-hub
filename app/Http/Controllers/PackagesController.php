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
        $package->load(['attachments']);

        return view('packages.show.index', [
            'package' => $package,
        ]);
    }

    public function store(Request $request, ProcessSubmittedPackage $action)
    {
        $this->validate($request, [
            'type' => ['required', 'in:packagist,npm'],
            'url' => ['required', 'string', new IsValidGitHubRepoUrl],
        ]);

        $parts = explode('/', Str::after($request->url, 'https://github.com/'));

        $package = $action->execute($parts[0], $parts[1]);

        flash('status', 'success', 'Package submitted!');

        return redirect()->route('app.packages.show', ['vendor' => $package->vendor, 'package' => $package]);
    }

    public function delete($vendor, Package $package)
    {
        $package->delete();

        return redirect()->route('app.packages.index');
    }
}
