<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageScreenshotsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function store($vendor, Package $package, Request $request)
    {
        // $this->validate($request, [
        //     ''
        // ]);
    }

    public function show($vendor, Package $package)
    {
        $package->load(['user', 'attachments']);

        return view('packages.show.screenshots', [
            'package' => $package
        ]);
    }
}
