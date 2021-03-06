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

Route::get('/', 'StaticPages@home')->name('home');
Route::get('/about', 'StaticPages@about')->name('about');
Route::get('/help', 'StaticPages@help')->name('help');

Route::get('sigup', 'UsersController@create')->name('sigup');
