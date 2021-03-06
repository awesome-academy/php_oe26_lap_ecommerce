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

Route::get('/','ProductController@index')->name('home.index');

Route::prefix('categories')->group(function (){
    Route::get('/{id}','CategoryController@show')->name('home.categories.show');
});

Route::prefix('products')->group(function (){
    Route::get('/{id}','ProductController@detail')->name('home.products.detail');
    Route::get('/', 'ProductController@index')->name('home.index');
});
