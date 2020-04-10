<?php

namespace App\Http\Controllers;

use App\Actions\ResyncPackage;
use App\Package;
use Illuminate\Http\Request;

class PackageSyncController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($vendor, Package $package, ResyncPackage $action)
    {
        $limit = 60;

        if (auth()->id() == $package->user->id) {
            // Resync limit is every 30 minutes for package owners
            $limit = 30;
        }

        $diff = $package->last_synced_at->diffInMinutes(now());

        if ($diff >= $limit) {

            $action->onQueue()->execute($package);

            flash('status', 'success', 'Resync with GitHub in progress!');
        } else {
            $diff = $limit - $diff;

            flash('status', 'error', "You can only resync every $limit minutes, please wait $diff more minutes.");
        }

        return redirect()->to($package->route('show'));
    }
}
