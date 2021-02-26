<?php

namespace App\Providers;

use App\User;
use App\Package;
use App\Observers\UserObserver;
use App\Observers\PackageObserver;
use App\Observers\TemplateObserver;
use Illuminate\Auth\Events\Registered;
use App\Domain\Templates\Models\Template;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        User::observe(UserObserver::class);

        Package::observe(PackageObserver::class);

        Template::observe(TemplateObserver::class);
    }
}
