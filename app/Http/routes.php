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
	Route::get('/', 'Auth\AuthController@showEmailForm');

	Route::post('auth', 'Auth\AuthController@authRoute');

	Route::get('login', 'Auth\AuthController@showLoginForm');
	Route::post('login', 'Auth\AuthController@login');
	Route::get('logout', 'Auth\AuthController@logout');

	Route::post('password/email', 'Auth\AuthController@login');
	Route::post('password/reset', 'Auth\AuthController@login');
	Route::get('password/reset/{token?}', 'Auth\AuthController@logout');

    // Register User
	Route::get('register/step1/{token}', 'Auth\AuthController@showUserForm');
    Route::post('register/step2/', 'Auth\AuthController@registerUser');
});