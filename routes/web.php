<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth
Route::post('logout', 'Auth\LogoutController')->name('auth.logout');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('auth.login');

// Settings
Route::get('/settings', 'UserSettingsController@show')->name('app.settings.index');
Route::post('/settings/resync', 'UserSettingsController@resync')->name('app.settings.account.resync');
Route::delete('/settings/account', 'UserSettingsController@delete')->name('app.settings.account.delete');

// General
Route::get('/', 'WelcomeController')->name('index');
Route::get('/search', 'SearchController@index')->name('search');

// Users
Route::get('/users/{user}', 'UserProfilesController@show')->name('app.users.show');
Route::get('/users/{user}/packages', 'UserPackagesController@show')->name('app.users.packages.show');
Route::get('/users/{user}/favorites', 'UserFavoritesController@show')->name('app.users.favorites.show');
Route::get('/users/{user}/templates', 'UserTemplatesController@show')->name('app.users.templates.show');

// Templates
Route::get('/templates', 'TemplatesController@index')->name('app.templates.index');
Route::post('/templates', 'TemplatesController@store')->name('app.templates.store');
Route::get('/templates/create', 'TemplatesController@create')->name('app.templates.create');
Route::get('/templates/{template}', 'TemplatesController@show')->name('app.templates.show');
Route::post('/templates/{template}/favorites', 'TemplatesFavoritesController@store')->name('app.templates.favorites.store');
Route::delete('/templates/{template}/favorites', 'TemplatesFavoritesController@delete')->name('app.templates.favorites.delete');

/**
 * Packages
 */

// Package --> Index
Route::livewire('/packages', 'packages-page')->layout('layouts.app')->section('content')->name('app.packages.index');

// Package --> Create/Store/Delete
Route::post('/packages', 'PackagesController@store')->name('app.packages.store');
Route::get('/packages/create', 'PackagesController@create')->name('app.packages.create');
Route::delete('/packages/{vendor}/{package}', 'PackagesController@delete')->name('app.packages.delete');
Route::get('/packages/{vendor}/{package}/edit', 'PackagesController@edit')->name('app.packages.edit');

Route::post('/packages/{vendor}/{package}/resync', 'PackageSyncController')->name('app.packages.resync');

// Package --> Show
Route::get('/packages/{vendor}/{package}', 'PackagesController@show')->name('app.packages.show');
Route::get('/packages/{vendor}/{package}/screenshots', 'PackageScreenshotsController@show')->name('app.packages.screenshots.show');

/**
 * Attachments
 */
Route::post('/attachments/upload', function (Request $request) {
    dd($request);
})->name('app.attachments.upload');
