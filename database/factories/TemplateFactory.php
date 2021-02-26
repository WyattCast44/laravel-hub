<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Domain\Templates\Models\Template;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Template::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'name' => Str::slug($faker->words(rand(3, 5), true)),
        'description' => $faker->paragraph,
        'public' => true,
        'official' => rand(0, 1),
        'content' => file_get_contents(database_path('factories/stubs/palette.yaml')),
        'views' => rand(0, 100),
        'downloads' => rand(0, 100),
    ];
});
