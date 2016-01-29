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


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PagesController@index');
    
    Route::post('identify', 'UserController@identify');
    Route::get('identify', function () { return redirect('/'); });

    Route::get('register', function () { return redirect('/'); });
    Route::get('register/{token}', 'UserController@showRegisterForm');
    Route::put('register', 'UserController@register');

    Route::post('login', 'UserController@login');
    Route::get('login', function () { return view('auth.login'); });

    Route::get('dashboard', 'PagesController@dashboard');
    
    Route::get('customer/create', 'CustomerController@creationForm');
    Route::post('customer/create', 'CustomerController@create');

    Route::get('logout', 'UserController@logout');
});