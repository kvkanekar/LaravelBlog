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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/users', 'UserController@index');
Route::get('/blogs', 'BlogController@index');
Route::get('/view/{id}', 'BlogController@view');
Route::get('/adminlist/{id}', 'LoginController@adminview');
Route::get('/edit/{id}', 'BlogController@edit');
Route::post('/edit/{id}', 'BlogController@update');
Route::get('/newpost/{id}', 'BlogController@addnewform');
Route::post('/newpost/{id}', 'BlogController@addnew');
