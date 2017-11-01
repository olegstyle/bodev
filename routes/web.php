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
Route::get('/', "MainController@index");
Route::group(['prefix' => 'angi'] , function() {
    Route::get('/', "AngularController@index");
    Route::get('getData', "AngularController@getData");
    Route::post('contact/send', "AngularController@sendMail");

    Route::get('techGroups', "AngularController@getTechGroups");
    Route::get('techStacks', "AngularController@getTechStacks");
    Route::get('projects', "AngularController@getProjects");
});

Route::post('/sendmail', "MainController@sendMail");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('dictionary/{appName}/{dict}', 'DictionaryController@show');
