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
    	else if (Auth::check()){
    		return redirect('dashboard');
    	}
    	else{
    		return redirect('identify');
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

    /**
	 * Shows the users view.
	 *
	 * @return Response
	 */
    public function showUsers()
    {
    	$users = User::all();
    	return view('admin.users', compact('users'));
    }

    /**
	 * Shows the users view.
	 *
	 * @return Response
	 */
    public function activateUser(Request $request)
    {
    	$id = $request->userId;
    	$user = User::find($id);
    	$user->togglePermission('is_customer');
    	$users = User::all();
    	return view('admin.users', compact('users'));
    }
}
