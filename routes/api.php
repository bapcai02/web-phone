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

// Route::middleware('auth:api')->get('/user', 'API\UserController@index'
// );
Route::get('/user', 'API\UserController@index');
Route::get('/user/{id}', 'API\UserController@show');
Route::post('/user/add','API\UserController@store');
Route::put('/user/update/{id}','API\UserController@store');
Route::delete('/user/delete/{id}','API\UserController@destroy');