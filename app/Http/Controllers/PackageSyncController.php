<?php

namespace App\Http\Controllers;

use App\Package;
use App\Actions\ResyncPackage;

class PackageSyncController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($vendor, Package $package, ResyncPackage $action)
    {
        if (auth()->id() == $package->user->id) {
            // Resync limit is 30 minutes for package owners
            $limit = 30;
        } else {
            // Default resync time limit is 60 minutes
            $limit = 60;
        }

        $diff = $package->last_synced_at->diffInMinutes(now());

        if ($diff >= $limit) {

            $action->onQueue()->execute($package);

            flash('status', 'success', 'Resync with GitHub in progress!');
        } else {
            $remaining = $limit - $diff;

            flash('status', 'error', "You can only resync every $limit minutes, please wait $remaining more minutes.");
        }

        return redirect()->to($package->route('show'));
    }
}
