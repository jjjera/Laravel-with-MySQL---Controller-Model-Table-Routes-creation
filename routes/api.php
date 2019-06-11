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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('products', 'ProductController');

Route::get('/products', 'ProductController@index');

Route::post('/article', 'ProductController@store');

Route::put('/editarticle','ProductController@edit');

Route::delete('/deletearticle/{itemId}','ProductController@destroy');