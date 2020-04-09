<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Attachment;
use App\Package;
use Faker\Generator as Faker;

$factory->define(Attachment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'attachable_id' => $package = factory(Package::class),
        'attachable_type' => get_class($package),
        'path' => 'image.png',
        'meta' => null,
    ];
});
