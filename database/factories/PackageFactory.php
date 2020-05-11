<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Package;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$languages = [
    'PHP',
    'JS',
    'Python',
    'Bash',
];

$factory->define(Package::class, function (Faker $faker) use ($languages) {
    return [
        'user_id' => ($user = User::first()) ? $user : factory(User::class),
        'name' => Str::slug($faker->name(rand(1, 2), true)),
        'vendor' => Str::slug($faker->words(rand(1, 2), true)),
        'display_name' => $faker->words(rand(2, 3), true),
        'description' => (rand(0, 1)) ? $faker->paragraphs(rand(1, 4), true) : null,
        'repo_url' => 'https://github.com/laravel/laravel',
        'package_url' => 'https://packagist.org/packages/laravel/laravel',
        'official' => false,
        'language' => $languages[array_rand($languages)],
        'stars_count' => rand(0, 300),
        'last_synced_at' => now(),
        'meta' => null,
    ];
});
