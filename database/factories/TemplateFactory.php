<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Template;
use App\User;
use Faker\Generator as Faker;

$factory->define(Template::class, function (Faker $faker) {
    return [
        'name' => $faker->words(rand(3, 5), true),
        'description' => $faker->paragraph,
        'user_id' => factory(User::class),
        'content' => file_get_contents(database_path('factories/stubs/palette.yaml')),
        'views' => rand(0, 100),
        'downloads' => rand(0, 100),
    ];
});
