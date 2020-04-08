<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageScreenshotsController extends Controller
{
    public function show($vendor, Package $package)
    {
        $package->load(['user']);

        return view('packages.show.screenshots', [
            'package' => $package
        ]);
    }
}
