<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'avatar' => null,
        'bio' => $faker->sentence,
        'blog' => $faker->url,
        'auth_provider' => 'github',
        'auth_token' => null,
        'elite' => rand(0, 1),
        'unclaimed' => rand(0, 1),
        'meta' => null,
        'remember_token' => Str::random(10),
    ];
});
