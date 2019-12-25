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
Route::get('/mostpopular', 'Api\GameController@mostPopular');
Route::get('/game/{id}', 'Api\GameController@show');
Route::get('/game/{id}/ads-one', 'Api\GameController@showAdsOne');
Route::get('/game/{id}/ads-two', 'Api\GameController@showAdsTwo');
Route::get('/game/{id}/ads-three', 'Api\GameController@showAdsThree');
Route::get('/game/{id}/scene-one', 'Api\GameController@showSceneOne');
Route::get('/game/{id}/scene-two', 'Api\GameController@showSceneTwo');
Route::get('/game/{id}/scene-three', 'Api\GameController@showSceneThree');
Route::post('/add-game', 'Api\GameController@store');
Route::delete('/deletegame/{id}', 'Api\GameController@destroy');

//Ad controller 
Route::post('/post-ad', 'Api\AdController@store');

//Scene controller 
Route::post('/post-scene', 'Api\SceneController@store');