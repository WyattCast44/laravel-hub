<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@redirectToProvider')->name('auth.login');
    Route::get('login/callback', 'LoginController@handleProviderCallback');
    Route::get('login/error', 'LoginController@showError')->name('auth.errors.show');
    Route::post('logout', 'LogoutController')->name('auth.logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
