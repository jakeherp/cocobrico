<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AdminLoginRequest;

use App\User;

use Auth;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('admin', ['except' => ['index','login']]);
	}

    /**
	 * Shows the index page.
	 *
	 * @return Response
	 */
    public function index(){
    	if (Auth::check() && Auth::user()->hasPermission('is_admin')) {
    		return redirect('admin/dashboard');
    	}
    	else{
    		return view('admin.login');
    	}
	}

	/**
	 * Shows the admin dashboard.
	 *
	 * @return Response
	 */
    public function dashboard(){
    	return view('admin.dashboard');
	}

	/**
	 * Logs the user in.
	 *
	 * @param  CheckPasswordRequest $request
	 * @return Response
	 */
    public function login(AdminLoginRequest $request){
		return $this->authenticate($request);
    }

    /**
	 * Logs the user out.
	 *
	 * @param  CheckPasswordRequest $request
	 * @return Response
	 */
    public function logout(){
		Auth::logout();
		return redirect('admin');
    }

	/**
	 * Handle an authentication attempt.
	 *
	 * @param  Request $request
	 * @return Response
	 */
    public function authenticate($request)
    {
    	if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
           	$user = Auth::user();
           	return redirect('admin/dashboard');
        }
        else{
        	return redirect()->back()->withInput()->withErrors(['The username and/or password is wrong!']);
        }
    }
}
