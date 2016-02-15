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
    Route::get('login', 'UserController@showLoginForm'); 

    Route::get('dashboard', 'PagesController@dashboard');
    Route::get('accounts', 'PagesController@accounts');

    Route::get('orders', 'PagesController@orders');
    Route::get('orders/pallets', 'PagesController@orderPallets');
    Route::get('orders/pallets/{reference}', 'OrdersController@viewOrder');
    Route::post('orders/pallets/{reference}/copy', 'OrdersController@copyOrder');

    Route::post('orders/pallets/cancel', 'OrdersController@actionToggleCancelation');

    Route::post('orders/pallets', 'OrdersController@createOrderPallets');
    Route::get('orders/container', 'PagesController@orderContainer');

    Route::get('downloads', 'PagesController@downloads');
    Route::get('settings', 'PagesController@settings');
    
    Route::get('address', 'AddressController@creationForm');
    Route::post('address', 'AddressController@create');

    Route::get('logout', 'UserController@logout');

    // Admin area
    Route::get('admin', 'AdminController@index');
    Route::get('admin/dashboard', 'AdminController@dashboard');
    Route::get('admin/users', 'AdminController@showUsers');
    Route::post('admin/users', 'AdminController@activateUser');
});