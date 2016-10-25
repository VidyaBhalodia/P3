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

Route::get('/', function() {
    return view('home');
	});

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/text', 'TextController@index')->name('text.index');
Route::post('/users', 'UserController@generate')->name('users.generate');
Route::post('/text', 'TextController@generate')->name('text.generate');

