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
Route::post('auth', 'LoginController@authenticate');
Route::post('auth-refresh', 'LoginController@refreshToken');
Route::get('me', 'LoginController@getAuthenticatedUser');

Route::group(['prefix' => 'v1', 'middleware'=>'auth:api'], function () {

    Route::apiResource('categories', 'CategoryController');

});
