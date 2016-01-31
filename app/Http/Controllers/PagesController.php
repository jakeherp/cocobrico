<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

use App\PalletCategory;
use App\Warehouse;

class PagesController extends Controller
{
    public function __construct(){
    	$this->middleware('customer', ['except' => ['index']]);
		$this->middleware('auth', ['except' => ['index']]);
	}

	/**
	 * Shows the index page.
	 *
	 * @return Response
	 */
    public function index(){
  		// User is logged in
    	if (Auth::check()) {
    		$user = Auth::user();
    		// User has been activated and created a customer
    		if($user->hasPermission('is_customer') && count($user->customers()->get()) > 0){
	    		return redirect('dashboard');
	    	}
	    	// User has no customer created
	    	elseif(count($user->customers()->get()) == 0){
	    		return redirect('customer/create');
	    	}
	    	// User has created a customer, but is not activated yet
	    	else{
	    		return view('auth.email');
	    	}
		}
		// User is not logged in
		else{
			return view('auth.email');
		}
	}

	/**
	 * Shows the users dashboard.
	 *
	 * @return Response
	 */
    public function dashboard(){
    	$user = Auth::user();
    	return view('pages.dashboard', compact('user'));
	}

	/**
	 * Shows the users orders page.
	 *
	 * @return Response
	 */
    public function orders(){
    	$user = Auth::user();
    	return view('pages.orders', compact('user'));
	}

	/**
	 * Shows the users orders page.
	 *
	 * @return Response
	 */
    public function orderPallets(){
    	$user = Auth::user();
    	$customers = $user->customers()->get();
    	$warehouses = Warehouse::all();
    	$categories = PalletCategory::all();
    	return view('pages.orders.pallets', compact('user','warehouses','categories','customers'));
	}

	/**
	 * Shows the users orders page.
	 *
	 * @return Response
	 */
    public function orderContainer(){
    	$user = Auth::user();
    	return view('pages.orders.container', compact('user'));
	}

	/**
	 * Shows the users accounts page.
	 *
	 * @return Response
	 */
    public function accounts(){
    	$user = Auth::user();
    	return view('pages.accounts', compact('user'));
	}

	/**
	 * Shows the users downloads page.
	 *
	 * @return Response
	 */
    public function downloads(){
    	$user = Auth::user();
    	return view('pages.downloads', compact('user'));
	}

	/**
	 * Shows the users settings page.
	 *
	 * @return Response
	 */
    public function settings(){
    	$user = Auth::user();
    	return view('pages.settings', compact('user'));
	}
}
