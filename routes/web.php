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
route::get('/details', 'detailcontroller@index')->name('details');
route::get('/checkout', 'checkoutController@index')->name('checkout');
route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');
route::prefix('dashboard')
    ->namespace('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        route::get('/', 'Dashboardcontroller@index')
            ->name('dashboard');
            
            route::resource('travel-package', 'TravelPackageController');
            route::resource('gallery', 'GalleryController');
    });



Auth::routes(['verify' => true]);
require __DIR__.'/auth.php';
 