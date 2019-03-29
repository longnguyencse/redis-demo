<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('search-redis/product', 'ProductsController@searchRedis')->name('redis');
Route::post('search-mysql/product', 'ProductsController@searchMysql')->name('mysql');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
