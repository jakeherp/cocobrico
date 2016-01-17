<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\TempUser;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\CheckEmailRequest;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
	
    /**
     * Shows the email insert form.
     *
     * @return Response
     */
    public function insertEmail(){
        return view('auth/email');   
    }

	/**
	 * Checks if the entered email adress is already in the database. 
     * If yes, it will show the login form. 
     * If not, it will view the register form.
	 *
	 * @param  Request  $request
	 * @return Customer
	 */
	public function checkEmail(CheckEmailRequest $request){

        $user = User::where('email', '=', $request->email)->firstOrFail();

        if ($user == null) {
            // user doesn't exist
            $token = str_random(30);

            Mail::send('emails/verifyEmail', [$token], function ($m) {
                $m->from('noreply@cocobrico.com', 'Cocobrico Europe Ltd.');
                $m->to($request->email, $request->email)->subject('Verify your email adress!');
            });

            return view('auth/verifyEmail');
        }
        else{
            // user exist
            return view('auth/login', compact('user'));
        }

        return view('auth/email');
        
	}

    /**
     * Shows the login form.
     *
     * @return Response
     */
    public function login(){
        return view('auth/login');   
    }

    /**
     * Shows the register form.
     *
     * @return Response
     */
    public function register(){
        return view('auth/register');   
    }
}
