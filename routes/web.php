<?php

use Illuminate\Support\Facades\Route;

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


route::get('/', 'homecontroller@index')->name('home');

route::get('/details/{slug}', 'detailcontroller@index')->name('details');

Route::post('/checkout_process/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth', 'verified']);

route::prefix('dashboard')
    ->namespace('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        route::get('/', 'Dashboardcontroller@index')
            ->name('dashboard');
            
            route::resource('travel-package', 'TravelPackageController');
            route::resource('gallery', 'GalleryController');
            route::resource('transaction', 'TransactionController');
    });


    // route::get('/checkout', 'checkoutController@index')->name('checkout');
    // route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');
Auth::routes(['verify' => true]);
require __DIR__.'/auth.php';
 