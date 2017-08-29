<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', "MainController");
Route::get('/angular', "AngularController@index");
Route::post('/sendmail', "MainController@sendMail");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('dictionary/{appName}/{e_dict}', 'DictionaryController@show');
