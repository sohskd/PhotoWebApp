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

Route::get('/test', function () {
    return view('home/welcome');
});

Route::get('/template', function () {
    return view('layout/template');
});

// Picture Routes
Route::resource('picture', 'HomeController');
Route::post('processflickrPhoto', ['as' => 'processflickrPhoto', 'uses' => 'HomeController@processflickrPhoto']);