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

Route::get('/developer', function () {
    return view('developer');
});
Auth::routes();

Route::get('/home', 'DesignController@index');
Route::resource('designs', 'DesignController');
Route::resource('categories', 'CategoryController', ['except' => 'create']);