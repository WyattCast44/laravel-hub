<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PackageSyncController;
use App\Http\Controllers\UserPackagesController;
use App\Http\Controllers\UserProfilesController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\UserFavoritesController;
use App\Http\Controllers\UserTemplatesController;
use App\Http\Controllers\PackageScreenshotsController;
use App\Http\Controllers\TemplatesFavoritesController;

// General
Route::get('/', WelcomeController::class)->name('index');
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Auth
Route::post('logout', LogoutController::class)->name('auth.logout');
Route::get('login/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('login', [LoginController::class, 'redirectToProvider'])->name('auth.login');

Route::name('app.')->group(function () {
    // Settings
    Route::get('/settings', [UserSettingsController::class, 'show'])->name('settings.index');
    Route::post('/settings/resync', [UserSettingsController::class, 'resync'])->name('settings.account.resync');
    Route::delete('/settings/account', [UserSettingsController::class, 'delete'])->name('settings.account.delete');

    // Users
    Route::get('/users/{user}', [UserProfilesController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/packages', [UserPackagesController::class, 'show'])->name('users.packages.show');
    Route::get('/users/{user}/favorites', [UserFavoritesController::class, 'show'])->name('users.favorites.show');
    Route::get('/users/{user}/templates', [UserTemplatesController::class, 'show'])->name('users.templates.show');
});

// Templates
Route::name('app.templates.')->prefix('templates')->group(function () {
    Route::get('/', [TemplatesController::class, 'index'])->name('index');
    Route::post('/', [TemplatesController::class, 'store'])->name('store');
    Route::get('/create', [TemplatesController::class, 'create'])->name('create');
    Route::get('/{template}', [TemplatesController::class, 'show'])->name('show');
    Route::post('/{template}/favorites', [TemplatesFavoritesController::class, 'store'])->name('favorites.store');
    Route::delete('/{template}/favorites', [TemplatesFavoritesController::class, 'delete'])->name('favorites.delete');
});

// Packages
Route::name('app.packages.')->prefix('packages')->group(function () {
    // Package --> Index
    Route::get('/', [PackagesController::class, 'index'])->name('index');

    // Package --> Create/Store/Delete
    Route::post('/', [PackagesController::class, 'store'])->name('store');
    Route::get('/create', [PackagesController::class, 'create'])->name('create');
    Route::delete('/{vendor}/{package}', [PackagesController::class, 'delete'])->name('delete');
    Route::get('/{vendor}/{package}/edit', [PackagesController::class, 'edit'])->name('edit');

    Route::post('/{vendor}/{package}/resync', PackageSyncController::class)->name('resync');

    // Package --> Show
    Route::get('/{vendor}/{package}', [PackagesController::class, 'show'])->name('show');
    Route::get('/{vendor}/{package}/screenshots', [PackageScreenshotsController::class, 'show'])->name('screenshots.show');
    Route::post('/{vendor}/{package}/screenshots', [PackageScreenshotsController::class, 'store'])->name('screenshots.store');
});
