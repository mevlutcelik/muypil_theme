<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::view('/', 'theme2.pages.home.index')->name('home');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-comments'), 'theme2.pages.comments.index')->name('comments');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-policies'), 'theme2.pages.policies.index')->name('policies');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-product'), 'theme2.pages.product.index')->name('product');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-pricing'), 'theme2.pages.pricing.index')->name('pricing');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-agencies'), 'theme2.pages.agencies.index')->name('agencies');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-login'), 'theme2.pages.login.index')->name('login');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-reset-password'), 'theme2.pages.reset-password.index')->name('reset-password');
    Route::view(LaravelLocalization::transRoute('theme2-global.routes-careers'), 'theme2.pages.careers.index')->name('careers');

    Route::get(LaravelLocalization::transRoute('theme2-global.routes-register'), function () {
        return 'register sayfası';
    })->name('register');

    // Dashboard
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::view('/', 'theme2.pages.dashboard.home.index')->name('home');
        Route::view('trackers', 'theme2.pages.dashboard.trackers.index')->name('trackers');
        Route::view('packets', 'theme2.pages.dashboard.packets.index')->name('packets');
        Route::view('packets/checkout', 'theme2.pages.dashboard.packets.checkout')->name('packets-checkout');
        Route::view('settings', 'theme2.pages.dashboard.settings.index')->name('settings');
        Route::view('profile', 'theme2.pages.dashboard.profile.index')->name('profile');
        Route::view('users', 'theme2.pages.dashboard.users.index')->name('users');
    });
});
