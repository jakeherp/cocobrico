<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'Auth\TempUserController@email');

	// Authentication Routes
    Route::get('login', 'Auth\TempUserController@email');
    Route::post('login', ['middleware' => 'login', function(){
    	return 1;
    }]);

    Route::post('email', 'Auth\TempUserController@create');
    Route::post('email/verify', 'Auth\TempUserController@verifymsg');
    Route::post('register/user', 'Auth\TempUserController@user');
    Route::post('register/customer', 'Auth\AuthController@customer');
    Route::post('login/customer', 'Auth\AuthController@login');

	Route::get('verify', function(){ return view('errors.404'); });
	Route::get('verify/{token}', 'Auth\TempUserController@verify');

	
});