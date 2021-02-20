<?php

use App\Package;
use App\Template;
use App\Attachment;
use Illuminate\Database\Seeder;
use App\Actions\ProcessSubmittedPackage;

class DatabaseSeeder extends Seeder
{
    // protected $repos = [
    //     'https://github.com/WyattCast44/laravel-schema',
    //     'https://github.com/WyattCast44/laravel-safe-username',
    //     'https://github.com/spatie/laravel-dashboard-time-weather-tile',
    //     'https://github.com/spatie/laravel-medialibrary',
    //     'https://github.com/spatie/package-skeleton-laravel',
    //     'https://github.com/spatie/laravel-dashboard',
    //     'https://github.com/spatie/unit-conversions',
    //     'https://github.com/spatie/package-skeleton-php',
    //     'https://github.com/spatie/laravel-dashboard-twitter-tile',
    //     'https://github.com/spatie/laravel-dashboard-calendar-tile',
    //     'https://github.com/spatie/phpunit-snapshot-assertions',
    //     'https://github.com/spatie/laravel-db-snapshots',
    //     'https://github.com/spatie/laravel-query-builder',
    //     'https://github.com/spatie/db-dumper',
    //     'https://github.com/spatie/docker',
    //     'https://github.com/spatie/laravel-backup-server',
    //     'https://github.com/spatie/laravel-event-sourcing',
    //     'https://github.com/spatie/laravel-model-states',
    // ];

    protected $repos = [
        'WyattCast44/laravel-schema',
        // 'WyattCast44/laravel-safe-username',
        // 'spatie/laravel-dashboard-time-weather-tile',
        // 'spatie/laravel-medialibrary',
        // 'spatie/package-skeleton-laravel',
        // 'spatie/laravel-dashboard',
        // 'spatie/unit-conversions',
        // 'spatie/package-skeleton-php',
        // 'spatie/laravel-dashboard-twitter-tile',
        // 'spatie/laravel-dashboard-calendar-tile',
        // 'spatie/phpunit-snapshot-assertions',
        // 'spatie/laravel-db-snapshots',
        // 'spatie/laravel-query-builder',
        // 'spatie/db-dumper',
        // 'spatie/docker',
        // 'spatie/laravel-backup-server',
        // 'spatie/laravel-event-sourcing',
        // 'spatie/laravel-model-states',
    ];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->packages();

        factory(Template::class, 10)->create();
    }

    public function packages()
    {
        collect($this->repos)->each(function ($repo) {

            $parts = explode('/', $repo);

            $username = $parts[0];

            $repo = $parts[1];

            app(ProcessSubmittedPackage::class)->execute($username, $repo);

            // $packages = factory(Package::class)->create([
            //     'repo_url' => $link,
            // ]);

            // $packages->each(function ($package) {
            //     factory(Attachment::class, rand(0, 5))->create([
            //         'attachable_id' => $package->id,
            //         'attachable_type' => get_class($package),
            //     ]);
            // });
        });

        return $this;
    }
}
