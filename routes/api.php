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

Route::group(['prefix' => 'dictionary', 'middleware' => []], function () {
    Route::get('{appName}/{dict}/{type}', 'DictionaryController@getByType');
    Route::get('{appName}/{dict}/{type}/add', 'DictionaryController@addByType');
});
