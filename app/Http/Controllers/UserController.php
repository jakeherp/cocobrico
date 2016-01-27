<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CheckEmailRequest;
use App\Http\Requests\CheckPasswordRequest;
use App\Http\Requests\LoginRequest;

use App\User;

use Auth;
use Hash;

class UserController extends Controller
{
    
	public function __construct(){
		$this->middleware('auth', ['only' => 'logout']);
	}

	/**
	 * Checks if the emailadress is already in the database. If it is, it will show the login form. If not, 
	 * it will send an verification email to this adress. 
	 *
	 * @param  CheckEmailRequest $request
	 * @return Response
	 */
    public function identify(CheckEmailRequest $request){
    	$user = User::where('email', '=', $request->email)->first();
		if ($user === null) {
		   // User is not existing in the database
		   $user = new User();
		   $user->username = $request->email;
		   $user->email = $request->email;
		   $user->register_token = str_random(40);
		   $user->save();
		   return view('auth.verifyEmail', compact('user'));
		}
		else{
		   // User is existing in the database
		   $regUser = User::where('email', '=', $request->email)->where('password', '!=', '')->first();
		   if ($regUser != null) {
		   		// User is already registered
		   		return redirect('login')->with('email', $request->email);
		   }
		   else{
		   		// User is not registered yet
		   		return view('auth.verifyEmail', compact('user'));
		   }
		}
    }

    /**
	 * Shows the register form, if there is a user with the given token.
	 *
	 * @param  string $token
	 * @return Response
	 */
    public function showRegisterForm($token){
    	$user = User::where('register_token', '=', $token)->firstOrFail();
    	if ($user != null) {
		   	return view('auth.register',compact('user'));
		}
    }

    /**
	 * Registers the users password.
	 *
	 * @param  CheckPasswordRequest $request
	 * @return Response
	 */
    public function register(CheckPasswordRequest $request){
    	$user = User::where('email', '=', $request->email)->where('register_token', '=', $request->register_token)->firstOrFail();
    	if ($user != null) {
		   	$user->password = Hash::make($request->password_1);
			$user->save();
			// User logged in!
			return $this->authenticate($user);	
		}
    }

    /**
	 * Logs the user in.
	 *
	 * @param  CheckPasswordRequest $request
	 * @return Response
	 */
    public function login(LoginRequest $request){
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
		return view('auth.email');
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate($request)
    {
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if(count($user->customers) == 0){
        		// Show the customer form, if the user has no customer yet
        		return redirect('customer/create');
	        }
	        else{
	        	// Show the dashboard, if the user has a customer
	        	return redirect('dashboard');
	        }
        }
    }

}
