<?php

use Illuminate\Support\Facades\Route;

// Auth
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('auth.login');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/error', 'Auth\LoginController@showError')->name('auth.errors.show');
Route::post('logout', 'Auth\LogoutController')->name('auth.logout');

// Settings
Route::get('/settings', 'UserSettingsController@show')->name('app.settings.index');

// General
Route::get('/', 'WelcomeController')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

// Users
Route::get('/users/{user}', 'UserProfilesController@show')->name('app.users.show');

// Packages
Route::get('/packages', 'PackagesController@index')->name('app.packages.index');
Route::post('/packages', 'PackagesController@store')->name('app.packages.store');
Route::get('/packages/create', 'PackagesController@create')->name('app.packages.create');
Route::get('/packages/{vendor}/{package}', 'PackagesController@show')->name('app.packages.show');

// Templates
Route::get('/templates', 'TemplatesController@index')->name('app.templates.index');
Route::get('/templates/create', 'TemplatesController@create')->name('app.templates.create');
