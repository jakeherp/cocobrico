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
		$this->middleware('auth', ['except' => ['index']]);
		// <---- Middleware für is_customer (User wurde von Admin freigeschaltet) -> if not is_user -> redirect to message
	}

	/**
	 * Shows the index page.
	 *
	 * @return Response
	 */
    public function index(){
    	if (Auth::check()) {
	    	return redirect('dashboard');
		}
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
