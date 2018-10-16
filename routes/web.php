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

Route::get('services', function () {
    return view('services');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('property', function () {
    return view('property');
});

Route::get('/', 'ProductsController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');