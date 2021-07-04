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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('product/list','Product\CreateProductController@index');
Route::get('product/add','Product\CreateProductController@getCreate');
Route::post('product/add','Product\CreateProductController@postCreate');

Route::get('/profile','Profile\ProfileController@index');
Route::post('/profile/update','Profile\ProfileController@update');

Route::get('/list/cart','Cart\CartController@index');