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
Route::get('artistetype','ArtisteTypeController@index');
Route::get('user','UserController@index');
Route::get('show', 'ShowController@index');
Route::get('artistetypeshow', 'ArtisteTypeShowController@index');
Route::get('representation', 'RepresentationController@index');
Route::get('representationuser', 'RepresentationUserController@index');
Route::get('inscription','InscriptionController@inscription');
Route::get('login', 'LoginController@login');
Route::get('contact', function () {
    return view('contact');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
