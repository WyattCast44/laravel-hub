<?php

namespace App\Providers;

use GitDown\Facades\GitDown;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::defaultView('view-name');

        // Paginator::defaultSimpleView('view-name');

        /**
         * Courtesy of the legend: Caleb Porzio
         * @link https://gist.github.com/calebporzio/03d610c813d6639e96accc3b06892242
         */
        Blade::directive('route', function ($expression) {
            return "<?php echo route({$expression}) ?>";
        });

        Blade::directive('routeIs', function ($expression) {
            return "<?php if (request()->routeIs({$expression})) : ?>";
        });

        Blade::directive('endrouteIs', function () {
            return "<?php endif; ?>";
        });

        /**
         * Courtesy of the legend: Caleb Porzio
         * @link https://github.com/calebporzio/gitdown
         */
        if (config()->has('gitdown.token')) {
            GitDown::setToken(config('gitdown.token'));
        }
    }
}
