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
    Route::get('/', 'Auth\TempUserController@insert');
    Route::post('/', 'Auth\TempUserController@create');

	// Authentication Routes
	Route::get('email', 'Auth\TempUserController@insert');
	Route::post('email', 'Auth\TempUserController@create');
	
	Route::get('register/{token}', 'Auth\AuthController@index');
	Route::post('register/{token}', 'Auth\AuthController@create');
});