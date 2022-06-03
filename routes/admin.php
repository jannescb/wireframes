<?php

use Admin\Http\Controllers\Auth\AuthenticatedSessionController;
use Admin\Http\Controllers\Auth\NewPasswordController;
use Admin\Http\Controllers\Auth\PasswordResetLinkController;
use Admin\Http\Controllers\BlockController;
use Admin\Http\Controllers\HomeController;
use Admin\Http\Controllers\MediaCollectionController;
use Admin\Http\Controllers\MediaController;
use Admin\Http\Controllers\NavController;
use Admin\Http\Controllers\PageController;
use Admin\Http\Controllers\SettingController;
use Admin\Http\Controllers\UserController;
use Admin\Http\Controllers\UserProfileController;
use Admin\Http\Middleware\AuthenticateAdmin;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => AuthenticateAdmin::class,
], function () {
    Route::get('/', [HomeController::class, 'show']);

    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');

    // Users
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/items', [UserController::class, 'items'])->name('user.items');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.delete');

    // User Profile
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile');
    Route::post('/user/profile/password', [UserProfileController::class, 'updatePassword'])->name('user.profile.password');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // media
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::get('/media/items', [MediaController::class, 'items'])->name('media.items');
    Route::get('/media/items/{file}', [MediaController::class, 'item'])->name('media.item');
    Route::post('/media/upload', [MediaController::class, 'upload'])->name('media.upload');
    Route::post('/media/delete', [MediaController::class, 'destroy'])->name('media.destroy');

    // media collections
    Route::post('/media', [MediaCollectionController::class, 'store'])->name('media-collections.show');
    Route::get('/media/{collection}', [MediaCollectionController::class, 'show'])->name('media-collections.show');
    Route::post('/media/{collection}/upload', [MediaCollectionController::class, 'upload'])->name('media-collections.upload');
    Route::post('/media/{collection}/remove', [MediaCollectionController::class, 'remove'])->name('media-collections.remove');
    Route::post('/media/{collection}/add', [MediaCollectionController::class, 'add'])->name('media-collections.add');

    // pages
    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
    Route::get('/pages/items', [PageController::class, 'items'])->name('pages.items');
    Route::get('/pages/{page}/{tab?}', [PageController::class, 'show'])->name('pages.show');
    Route::delete('/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');
    Route::post('/pages', [PageController::class, 'store'])->name('pages.store');
    Route::post('/pages/order', [PageController::class, 'order'])->name('pages.order');
    Route::put('/pages/{page}', [PageController::class, 'update'])->name('pages.update');
    Route::post('/pages/{page}/meta', [PageController::class, 'meta'])->name('pages.meta');
    Route::post('/pages/{page}/upload', [PageController::class, 'upload'])->name('pages.upload');
    Route::post('/pages/{page}/duplicate', [PageController::class, 'duplicate'])->name('pages.duplicate');

    // nav
    Route::get('/nav', [NavController::class, 'index'])->name('nav.index');
    Route::get('/nav/{type}', [NavController::class, 'show'])->name('nav.show');
    Route::post('/nav/{type}', [NavController::class, 'store'])->name('nav.store');
    Route::put('/nav/{type}/{item}', [NavController::class, 'update'])->name('nav.update');
    Route::post('/nav/{type}/order', [NavController::class, 'order'])->name('nav.order');
    Route::delete('/nav/{type}/{item}', [NavController::class, 'destroy'])->name('nav.item.delete');

    // blocks
    Route::get('/blocks', [BlockController::class, 'index'])->name('blocks.index');
    Route::post('/blocks', [BlockController::class, 'store'])->name('blocks.store');
    Route::get('/blocks/items', [BlockController::class, 'items'])->name('blocks.items');
    Route::get('/blocks/{block}', [BlockController::class, 'show'])->name('blocks.show');
    Route::put('/blocks/{block}', [BlockController::class, 'update'])->name('blocks.update');
});

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});
