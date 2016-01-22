<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\User;
use App\Customer;
use Validator;
use App\Http\Controllers\Controller;

use App\Http\Requests\CheckEmailRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateCustomerRequest;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
    protected $redirectTo = '/home';

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
            //'name' => 'required|max:255',
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
     * Checks email input and redirects to the right step.
     *
     * @param  CheckEmailRequest $request
     * @return Response
     */
    public function authRoute(CheckEmailRequest $request){
        $email = $request->email;
        $user = User::where('email', '=', $email)->where('password', '!=', '')->first();
        if($user != null){
            return view('auth.login', compact('user'));
        }
        else{
            $user = User::where('email', '=', $email)->first();
            if($user != null){
                $token = $user->register_token;
                return $token;
                //return view('auth.verifyEmail', compact('email','token'));
            }
            else{
                $user = new User();
                $token = $user->registerEmail($email);
                return view('auth.verifyEmail', compact('email','token'));
            }
        }
    }

    /**
     * Shows the email form.
     *
     * @return Response
     */
    public function showEmailForm()
    {
        return view('auth.email');
    }

    /**
     * Shows the user register form.
     *
     * @param  string $token
     * @return Response
     */
    public function showUserForm($token)
    {
        $user = User::where('register_token', '=', $token)->where('password', '!=', '')->first();
        if($user == null){
            $user = User::where('register_token', '=', $token)->first();
            return view('auth.register', compact('user'));
        }
        else{
            return view('auth.login', compact('user'));
        }
    }

    /**
     * Shows the user register form.
     *
     * @param  CreateUserRequest $request
     * @return Response
     */
    public function registerUser(CreateUserRequest $request)
    {
        $user = User::where('email', '=', $request->email)->firstOrFail();
        $user->password = $request->password;
        $user->save();
        return view('auth.login', compact('user'));
    }

    /**
     * Shows the customer register form.
     *
     * @return Response
     */
    public function showCustomerForm($token)
    {
        $user = User::where('register_token', '=', $token)->where('password', '!=', '')->firstOrFail();
        return view('auth.customer');
    }

    /**
     * Creates a new customer in the database.
     *
     * @param  string $token
     * @return Response
     */
    public function registerCustomer(CreateCustomerRequest $request)
    {
        $customer = new Customer();
        $user = User::where('email', '=', $request->email)->firstOrFail();
        $user->password = $request->password_1;
        $user->save();
        return view('auth.login', compact('customer'));
    }
}
