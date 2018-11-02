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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('register')->group(function () {
    Route::get('/', 'AuthController@create')->name('register_show');
    Route::post('/', 'AuthController@store')->name('register');
});

Route::prefix('login')->group(function () {
    Route::get('/', 'AuthController@showlogin')->name("login");
    Route::post('/', 'AuthController@login')->name('login_submit');
});
Route::get('/logout', 'AuthController@destroy')->name('logout');
