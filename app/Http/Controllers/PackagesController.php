<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Support\Str;
use App\Rules\ValidRepoUrl;
use Illuminate\Http\Request;
use App\Actions\ProcessSubmittedPackage;
use App\Queries\PackageLanguages;
use App\Services\Github;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
    }

    public function create()
    {
        return view('packages.create');
    }

    public function index()
    {
        $official = DB::table(Package::getTableName())
            ->where('official', '=', true)
            ->count();

        $community = DB::table(Package::getTableName())
            ->where('official', '=', false)
            ->count();

        return view('packages.index', [
            'languages' => PackageLanguages::get(),
            'officialPackagesCount' => $official,
            'communityPackagesCount' => $community,
        ]);
    }

    public function show($vendor, Package $package)
    {
        $package->load(['user']);

        return view('packages.show.index', [
            'package' => $package,
        ]);
    }

    public function store(Request $request, ProcessSubmittedPackage $action, Github $client)
    {
        $this->validate($request, [
            'type' => ['required', 'in:packagist,npm'],
            'url' => ['required', 'string', new ValidRepoUrl($client)],
        ]);

        $parts = explode('/', Str::after($request->url, 'https://github.com/'));

        $package = $action->execute($parts[0], $parts[1]);

        flash('status', 'success', 'Package submitted!');

        return redirect()->route('app.packages.show', ['vendor' => $package->vendor, 'package' => $package]);
    }

    public function edit($vendor, Package $package)
    {
        abort_if($package->user->id != auth()->id(), 403);

        $package->load(['attachments']);

        return view('packages.show.edit', [
            'package' => $package,
        ]);
    }

    public function delete($vendor, Package $package)
    {
        abort_if($package->user->id != auth()->id(), 403);

        $package->delete();

        return redirect()->route('app.packages.index');
    }
}
