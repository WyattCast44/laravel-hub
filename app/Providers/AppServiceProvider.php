<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Templates\Models\Template;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Debugbar::disable();

        // Relation::morphMap([
        //    'app:models:template' => Template::class,
        // ]);
    }
}
