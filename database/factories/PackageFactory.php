<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Package;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'user_id' => ($user = User::first()) ? $user : factory(User::class),
        'name' => Str::slug($faker->words(rand(1, 2), true)),
        'vendor' => Str::slug($faker->words(rand(1, 2), true)),
        'display_name' => $faker->words(rand(2, 3), true),
        'tagline' => (rand(0, 1)) ? $faker->sentence : null,
        'description' => (rand(0, 1)) ? $faker->paragraphs(rand(1, 4), true) : null,
        'repo_url' => 'https://github.com/',
        'package_url' => 'https://packagist.org/',
        'meta' => null,
    ];
});
