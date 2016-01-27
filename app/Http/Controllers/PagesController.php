<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class PagesController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
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
}
