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
    Route::get('user', 'Api\AuthController@details');
    Route::get('/games', 'Api\GameController@index');
    Route::post('/logout', 'AuthController@logout');
});

// User controller 
Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');

// Game controller 
Route::get('/games', 'Api\GameController@index');
Route::get('/game/{id}', 'Api\GameController@show');
Route::post('/add-game', 'Api\GameController@store');
Route::delete('/deletegame/{id}', 'Api\GameController@destroy');

//Ad controller 
Route::post('/post-ad', 'Api\AdController@store');
