<?php

use Illuminate\Support\Facades\Route;

// Auth
Route::post('logout', 'Auth\LogoutController')->name('auth.logout');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('auth.login');

// Settings
Route::get('/settings', 'UserSettingsController@show')->name('app.settings.index');

// General
Route::get('/', 'WelcomeController')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

// Users
Route::get('/users/{user}', 'UserProfilesController@show')->name('app.users.show');
Route::get('/users/{user}/packages', 'UserPackagesController@show')->name('app.users.packages.show');
Route::get('/users/{user}/favorites', 'UserFavoritesController@show')->name('app.users.favorites.show');
Route::get('/users/{user}/templates', 'UserTemplatesController@show')->name('app.users.templates.show');

// Packages
Route::get('/packages', 'PackagesController@index')->name('app.packages.index');
Route::post('/packages', 'PackagesController@store')->name('app.packages.store');
Route::get('/packages/create', 'PackagesController@create')->name('app.packages.create');
Route::get('/packages/{vendor}/{package}', 'PackagesController@show')->name('app.packages.show');

// Templates
Route::get('/templates', 'TemplatesController@index')->name('app.templates.index');
Route::get('/templates/create', 'TemplatesController@create')->name('app.templates.create');

// Route::get('/test', function () {
//     $response = (new GitHub)->getUserRepos('wyattcast44');

//     dd(json_decode($response->getContents()));
// });
