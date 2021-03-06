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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update_fcm_token', 'HomeController@update_token');

Route::get('/api/fech_form', 'ApiController@fetch_forum')->name('fetch_forum');
Route::resource('threads', 'ThreadController');
Route::resource('posts', 'PostController');
Route::get('profile','HomeController@profile')->name("profile");