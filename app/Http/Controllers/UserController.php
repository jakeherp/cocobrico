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
use Mail;

class UserController extends Controller
{
	
	public function __construct(){
		$this->middleware('customer', ['only' => ['showRegisterForm','register','changeActiveIdentity']]);
		$this->middleware('auth', ['only' => 'logout']);
	}

	/**
	 * Checks if the emailadress is already in the database. If it is, it will show the login form. If not, 
	 * it will send an verification email to this address. 
	 *
	 * @param  CheckEmailRequest $request
	 * @return Response
	 */
	public function identify(CheckEmailRequest $request){
		$user = User::where('email', '=', $request->email)->first();
		if ($user === null) {
			// User is not existing in the database
			$user = new User();
			$user->email = $request->email;
			$user->register_token = str_random(40);
			$user->save();

			// Verification-Email is send to user.
			$sent = Mail::send('emails.verifyEmail', ['user' => $user], function ($m) use ($user) {
				$m->from(config('mail.from.address'), config('mail.from.name'));
				$m->to($user->email, $user->email)->subject('Verify your Email.');
			});

			return view('auth.verifyEmail', compact('user'));
		}
		else{
		   // User is existing in the database
		   $regUser = User::where('email', '=', $request->email)->where('password', '!=', '')->first();
		   if ($regUser != null) {
				// User is already registered
				if($regUser->hasPermission('is_admin') || $regUser->hasPermission('is_customer') || count($regUser->identities) == 0){
					// User is activated, admin or belongs to no identity yet
					return redirect('login')->with('email', $request->email);
				}
				else{
					// User belongs to an identity but is not activated yet
					return redirect()->back()->withErrors([' Your account has not been activated yet. A member of staff will check your entered details and will get in touch with you shortly.']);
				}   		
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
		if($token != ''){
			$user = User::where('register_token', '=', $token)->firstOrFail();
			if ($user != null) {
				return view('auth.register',compact('user'));
			}
		}
		return redirect('/')->with('messages', ['The token you have entered is invalid.']);
	}

	/**
	 * Shows the page where the user can reset his password.
	 *
	 * @return Response
	 */
	public function forgotPassword($user_id){
		$user = User::find($user_id);
		if($user){
			return view('auth.password',compact('user'));
		}
		else{
			return redirect('/');
		}
	}

	/**
	 * Send an email to the user for the password reset.
	 *
	 * @return Response
	 */
	public function resetPassword(Request $request){
		$user = User::find($request->userId);
		if($user){
			$user->register_token = str_random(40);
			$user->save();
			$sent = Mail::send('emails.verifyEmail', ['user' => $user], function ($m) use ($user) {
				$m->from('noreply@cb.pcserve.eu', 'Cocobrico');
				$m->to($user->email, $user->email)->subject('Reset your Password.');
			});
			return redirect('/')->with('messages', ['We send you an email with a link to reset your password.']);
		}
		else{
			return redirect('/');
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
			$user->password = Hash::make($request->password);
			$user->register_token = '';
			$user->save();
			// User logged in!
			return $this->authenticate($request);
		}
	}

	/**
	 * Changes the active identity of the user.
	 *
	 * @param  integer $id
	 * @return Response
	 */
	public function changeActiveIdentity($id){
		$user = Auth::user();
		if($id != $user->getActiveIdentity()->id){
			foreach($user->identities as $identity){
				if($identity->id == $id){
					$user->identities()->updateExistingPivot($user->getActiveIdentity()->id, ['active' => 0]);
					$user->identities()->updateExistingPivot($identity->id, ['active' => 1]);
				}
			}
		}
		return redirect()->back();
	}

	/**
	 * Shows the login form if the user is activated or belongs to no identity yet.
	 *
	 * @return Response
	 */
	public function showLoginForm(){
		if(session()->has('errors')){
			return view('auth.login'); 
		}
		else{
			if(session()->has('email')){
				$email = session('email');
				$user = User::where('email', '=', session('email'))->first();
				if($user->hasPermission('is_admin') || $user->hasPermission('is_customer') || count($user->identities) == 0){
					// Show the login form, if the user is either activated / admin or belongs to no identity yet.
					return view('auth.login', compact('user'));
				}
				else{
					// Show the email form, with an error message, that the user has not been activated yet
					return redirect('/')->withErrors([' Your account has not been activated yet. A member of staff will check your entered details and will get in touch with you shortly.']);
				} 
			}
			else{
				return redirect('/');
			}
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
		return redirect('/');
	}

	/**
	 * Handle an authentication attempt. If the user is already activated, he will be redirected to the dashboard.
	 * If her is not activated and has no identity, he will be redirected to the address creation formular. If he has
	 * already registered an address, but is not activated yet, he will be redirected to the homepage.
	 *
	 * @return Response
	 */
	public function authenticate($request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			$user = Auth::user();
			$user->loginCounter = $user->loginCounter + 1;
			$user->save();
			if($user->hasPermission('is_admin')){
				// If user is admin, he is going to be redirected to the admin panel.
				return redirect('admin');
			}
			else if(count($user->identities) == 0){
				// Show the address creation form, if the user has no address yet.
				return redirect('address');
			}
			else{
				// Show the dashboard, if the user has an address.
				return redirect('dashboard');
			}
		}
		else{
			return redirect()->back()->withInput()->withErrors(['The password is wrong!']);
		}
	}

}
