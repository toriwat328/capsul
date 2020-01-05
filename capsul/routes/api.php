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

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/user/photos', 'PhotosController@userphotoindex');
    Route::get('/user', 'PhotosController@userinfoindex');
    Route::post('/logout', 'AuthController@logout');
    Route::post('/photos', 'PhotosController@store');
    Route::delete('/photos/{photo}', 'PhotosController@destroy');

});


Route::post('/login', 'AuthController@login');

Route::post('/register', 'AuthController@register');
