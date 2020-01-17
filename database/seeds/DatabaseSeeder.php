<?php

use App\Package;
use App\Template;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Package::class, 10)->create();
        factory(Template::class, 10)->create();
    }
}
