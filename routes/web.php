<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/* Base Routing */
Route::get('/', 'PublicController@index');
Route::get('/test', 'PublicController@test');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
