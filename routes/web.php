<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return view('theme2.pages.home.index');
    })->name('home');
    Route::get(LaravelLocalization::transRoute('theme2-global.routes-comments'), function()
    {
        return view('theme2.pages.comments.index');
    })->name('comments');
    Route::get(LaravelLocalization::transRoute('theme2-global.routes-policies'), function()
    {
        return view('theme2.pages.policies.index');
    })->name('policies');

    Route::get(LaravelLocalization::transRoute('theme2-global.routes-product'), function()
    {
        return view('theme2.pages.product.index');
    })->name('product');

    Route::get(LaravelLocalization::transRoute('theme2-global.routes-pricing'), function()
    {
        return view('theme2.pages.pricing.index');
    })->name('pricing');

    Route::get(LaravelLocalization::transRoute('theme2-global.routes-agencies'), function()
    {
        return view('theme2.pages.agencies.index');
    })->name('agencies');

    Route::get(LaravelLocalization::transRoute('theme2-global.routes-login'), function()
    {
        return 'login sayfası';
    })->name('login');

    Route::get(LaravelLocalization::transRoute('theme2-global.routes-register'), function()
    {
        return 'register sayfası';
    })->name('register');
});
