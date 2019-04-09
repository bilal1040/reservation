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

Route::get('artist', 'ArtistController@index');
Route::get('type', 'TypeController@index');
Route::get('locality', 'LocalityController@index');
Route::get('role','RoleController@index');
Route::get('location','LocationController@index');