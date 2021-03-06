<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'],
    function () {
        Route::post('login', 'API\UserController@login');
        Route::post('register', 'API\UserController@register');

        Route::group([ 'middleware' => 'auth:api' ],
            function() {
                Route::get('logout', 'API\UserController@logout');
                Route::get('user', 'API\UserController@user');
            });
    }
);

Route::group([ 'middleware' => 'auth:api' ],
    function() {
        Route::resource('designs', 'API\DesignController');
    }
);