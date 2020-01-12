<?php

use App\Package;
use App\Services\GitHub;
use App\Services\GitHub\Client;
use Illuminate\Support\Facades\Route;

Route::get('/1', function () {
    $package = Package::create([
        'user_id' => auth()->user()->id,
        'name' => 'laravel-safe-username',
        'vendor' => 'WyattCast44',
        'display_name' => 'Laravel Safe Username',
    ]);

    $client = new GitHub;

    $response = $client->importPackageReadme($package);

    $package->update([
        'meta' => json_encode([
            'readme' => $response,
        ]),
    ]);

    dd($response);
});

Route::get('/2', function () {
    $token = auth()->user()->auth_token;

    $client = new Client($token);

    $response = $client->getUserRepos('wyattcast44');
});
