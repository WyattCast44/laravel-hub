<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageFavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store'. 'delete']);
    }

    public function store($vendor, Package $package)
    {
        auth()->user()->favorite($package);

        flash('status', 'success', 'Package favorited!');

        return redirect()->route('app.packages.show', ['vendor' => $package->vendor, 'package' => $package]);
    }

    public function delete($vendor, Package $package)
    {
        auth()->user()->unfavorite($package);

        flash('status', 'success', 'Favorite Removed!');

        return redirect()->route('app.packages.show', ['vendor' => $package->vendor, 'package' => $package]);
    }
}
