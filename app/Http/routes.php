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

    Route::get('password/{user_id}', 'UserController@forgotPassword');
    Route::post('password', 'UserController@resetPassword');

    Route::get('register', function () { return redirect('/'); });
    Route::get('register/{token}', 'UserController@showRegisterForm');
    Route::put('register', 'UserController@register');

    Route::post('login', 'UserController@login');
    Route::get('login', 'UserController@showLoginForm'); 

    Route::get('dashboard', 'PagesController@dashboard');
    Route::get('accounts', 'PagesController@accounts');

    Route::get('orders', 'PagesController@orders');

    // Changing Parameters
        Route::get('identity/{id}/change', 'UserController@changeActiveIdentity');

    // Pallet Orders:
        Route::get('orders/pallets', 'PagesController@orderPallets');                       // Pallet order overview
        Route::post('orders/pallets/remark', 'OrdersController@createRemark');              // Create a new remark
        Route::post('orders/pallets/cancel', 'OrdersController@actionCancleOrder');         // Cancels a pallet order
        Route::get('orders/pallets/{reference}', 'OrdersController@viewOrder');             // Detail view of one pallet order
        Route::get('orders/pallets/{reference}/get', 'OrdersController@actionGetOrder');    // Get data of a pallet order (AJAX)
        Route::get('orders/pallets/pallets/{reference}/get', 'OrdersController@actionGetOrder');
        Route::put('orders/pallets', 'OrdersController@editOrder');                         // Edit a pallet order from overview
        Route::post('orders/pallets', 'OrdersController@createOrderPallets');               // Copy a pallet order from overview
        Route::post('orders/pallets/{reference}', 'OrdersController@createOrderPallets');   // Copy a pallet order from detail view
        Route::put('orders/pallets/{reference}', 'OrdersController@editOrder');             // Edit a pallet order from detail view
    // Container Orders:
        Route::get('orders/container', 'PagesController@orderContainer');                   // Container order overview   
        Route::post('orders/container', 'OptionsController@placeOption');                   // Container order overview   

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