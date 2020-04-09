<?php

use App\Attachment;
use App\Package;
use App\Template;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $packeges = [
        //
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
        $packages = factory(Package::class, 10)->create();

        $packages->each(function ($package) {
            factory(Attachment::class, rand(0, 5))->create([
                'attachable_id' => $package->id,
                'attachable_type' => get_class($package),
            ]);
        });

        return $this;
    }
}
