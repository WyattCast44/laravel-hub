<?php

namespace App\Http\Controllers\API;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecentPackagesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return Package::latest()
            ->paginate(10);
    }
}
