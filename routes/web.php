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

Route::get('/','MainController@index');

/* login */
Route::get('/login','LoginController@index');
Route::get('/logout','LoginController@logout');

/* login with Facebook */
Route::get('/login/facebook/redirect','LoginController@redirectFacebook');
Route::get('/login/facebook/callback','LoginController@callbackFacebook');

/* login with Google */
Route::get('/login/google/redirect','LoginController@redirectGoogle');
Route::get('/login/google/callback','LoginController@callbackGoogle');

Route::get('/home', 'HomeController@index')->name('home');
