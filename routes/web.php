<?php

use Illuminate\Support\Facades\Route;

// Auth
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('auth.login');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/error', 'Auth\LoginController@showError')->name('auth.errors.show');
Route::post('logout', 'Auth\LogoutController')->name('auth.logout');

// General
Route::get('/', 'WelcomeController')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

// Users
Route::get('/users/{user}', 'UserProfilesController@show')->name('app.users.show');
