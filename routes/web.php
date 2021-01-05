<?php

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

Route::get('/', function () {
    return view('welcome');
});


//Dashboard
Route::get('/detail','DashboardController@detail');
Route::get('/cart','DashboardController@cart');
Route::get('/produk','DashboardController@produk');

//Checkout
Route::prefix('/checkout')->group(function () {
    Route::get('/detail','CheckoutController@detail');
    Route::get('/shipping','CheckoutController@shipping');
    Route::get('/payment','CheckoutController@payment');
    Route::get('/review','CheckoutController@review');
    Route::get('/complete','CheckoutController@complete');
});