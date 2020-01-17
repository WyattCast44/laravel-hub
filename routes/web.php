<?php

// Auth
Route::post('logout', 'Auth\LogoutController')->name('auth.logout');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('auth.login');

// Settings
Route::get('/settings', 'UserSettingsController@show')->name('app.settings.index');

// General
Route::get('/', 'WelcomeController')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@index')->name('search');

// Users
Route::get('/users/{user}', 'UserProfilesController@show')->name('app.users.show');
Route::get('/users/{user}/packages', 'UserPackagesController@show')->name('app.users.packages.show');
Route::get('/users/{user}/favorites', 'UserFavoritesController@show')->name('app.users.favorites.show');
Route::get('/users/{user}/templates', 'UserTemplatesController@show')->name('app.users.templates.show');

// Packages
Route::livewire('/packages', 'packages-page')
    ->layout('layouts.app')
    ->section('content')
    ->name('app.packages.index');

// Route::get('/packages', 'PackagesController@index')->name('app.packages.index');
Route::post('/packages', 'PackagesController@store')->name('app.packages.store');
Route::get('/packages/create', 'PackagesController@create')->name('app.packages.create');
Route::get('/packages/{vendor}/{package}', 'PackagesController@show')->name('app.packages.show');

// Templates
Route::get('/templates', 'TemplatesController@index')->name('app.templates.index');
Route::post('/templates', 'TemplatesController@store')->name('app.templates.store');
Route::get('/templates/create', 'TemplatesController@create')->name('app.templates.create');
Route::get('/templates/{template}', 'TemplatesController@show')->name('app.templates.show');
Route::post('/templates/{template}/favorites', 'TemplatesFavoritesController@store')->name('app.templates.favorites.store');
Route::delete('/templates/{template}/favorites', 'TemplatesFavoritesController@delete')->name('app.templates.favorites.delete');

// Webhooks
Route::webhooks('/github-webhooks');
