<?php

namespace App\Observers;

use App\Package;

class PackageObserver
{
    /**
     * Handle the package "created" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function created(Package $package)
    {
        //
    }

    /**
     * Handle the package "updated" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function updated(Package $package)
    {
        //
    }

    /**
     * Handle the package "deleted" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function deleted(Package $package)
    {
        // Delete any favorites to this package
        $package->favorites->each->delete();

        // Delete any attachments to this package
        $package->attachments->each->delete();
    }

    /**
     * Handle the package "restored" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function restored(Package $package)
    {
        //
    }

    /**
     * Handle the package "force deleted" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function forceDeleted(Package $package)
    {
        //
    }
}
