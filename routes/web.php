<?php

use Github\Client;
use Illuminate\Support\Facades\Route;

// Auth
Route::post('logout', 'Auth\LogoutController')->name('auth.logout');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('auth.login');

// Settings
Route::get('/settings', 'UserSettingsController@show')->name('app.settings.index');
Route::get('/settings/resync', 'UserSettingsController@resync')->name('app.settings.account.resync');
Route::delete('/settings/account', 'UserSettingsController@delete')->name('app.settings.account.delete');

// General
Route::get('/', 'WelcomeController')->name('index');
Route::get('/search', 'SearchController@index')->name('search');

// Users
Route::get('/users/{user}', 'UserProfilesController@show')->name('app.users.show');
Route::get('/users/{user}/packages', 'UserPackagesController@show')->name('app.users.packages.show');
Route::get('/users/{user}/favorites', 'UserFavoritesController@show')->name('app.users.favorites.show');
Route::get('/users/{user}/templates', 'UserTemplatesController@show')->name('app.users.templates.show');

// Packages
Route::livewire('/packages', 'packages-page')->layout('layouts.app')->section('content')->name('app.packages.index');
Route::post('/packages', 'PackagesController@store')->name('app.packages.store');
Route::get('/packages/multiple/create', 'MultiplePackagesController@create')->name('app.packages.multiple.create');
Route::get('/packages/create', 'PackagesController@create')->name('app.packages.create');
Route::get('/packages/{vendor}/{package}', 'PackagesController@show')->name('app.packages.show');
Route::delete('/packages/{vendor}/{package}', 'PackagesController@delete')->name('app.packages.delete');

// Package Favorites
Route::post('/packages/{vendor}/{package}/favorites', 'PackageFavoritesController@store')->name('app.packages.favorites.store');

// Templates
Route::get('/templates', 'TemplatesController@index')->name('app.templates.index');
Route::post('/templates', 'TemplatesController@store')->name('app.templates.store');
Route::get('/templates/create', 'TemplatesController@create')->name('app.templates.create');
Route::get('/templates/{template}', 'TemplatesController@show')->name('app.templates.show');
Route::post('/templates/{template}/favorites', 'TemplatesFavoritesController@store')->name('app.templates.favorites.store');
Route::delete('/templates/{template}/favorites', 'TemplatesFavoritesController@delete')->name('app.templates.favorites.delete');

// Route::get('/test', function () {
//     $user = auth()->user();
    
//     $token = $user->auth_token;

//     $client = new Client(null, 'machine-man-preview');
//     $client->authenticate($token, null, Client::AUTH_HTTP_TOKEN);

//     dd($client->api(('current_user'))->repositories($type = "member", $sort = 'created', $direction = 'desc'));
// });
