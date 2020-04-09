<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Attachment;
use Faker\Generator as Faker;

$factory->define(Attachment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
    ];
});
