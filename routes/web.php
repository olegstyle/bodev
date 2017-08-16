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
Route::get('/angular', "MainController");
Route::post('/sendmail', "MainController@sendMail");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
