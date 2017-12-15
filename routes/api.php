<?php

use Illuminate\Http\Request;

use App\Survivor;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('survivors', 'SurvivorController@index');
Route::get('survivors/{survivor}', 'SurvivorController@show');
Route::post('survivors', 'SurvivorController@store');
Route::put('survivors/{survivor}', 'SurvivorController@update');
Route::delete('survivors/{survivor}', 'SurvivorController@delete');
