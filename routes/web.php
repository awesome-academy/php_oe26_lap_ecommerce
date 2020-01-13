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

use Illuminate\Support\Facades\Route;

Route::get('/','Client\HomeController@index')->name('home.index');

Route::prefix('categories')->group(function (){
    Route::get('/{id}','Client\CategoryController@show')->name('home.categories.show');
});

Route::prefix('products')->group(function (){
    Route::get('/{id}','ProductController@detail')->name('home.products.detail');
    Route::get('/', 'ProductController@index')->name('home.index');
});

Route::prefix('orders')->group(function (){
    Route::get('','Client\OrderController@list')->name('home.orders.list')->middleware('auth');
    Route::get('/{id}','Client\OrderController@detail')->name('home.orders.detail');
    Route::get('/{id}/cancel','Client\OrderController@cancel')->name('home.orders.cancel');
});
