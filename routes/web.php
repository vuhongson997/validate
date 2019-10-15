<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});
Route::get('/validate', 'ValidateController@index')->name('login');
Route::post('/validate','ValidateController@store')->name('validate');
Route::get('/phone', 'ValidateController@phone')->name('phone');
Route::post('/phone', 'ValidateController@check')->name('phone');
Route::get('/register', 'ValidateController@register')->name('register');
Route::post('/register', 'ValidateController@registerCheck')->name('register');
