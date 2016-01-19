<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\TempUser;
use Mail;
use DB;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

use App\Http\Requests\CreateCustomerRequest;
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
    public function create(CreateCustomerRequest $request)
    {
        User::create([
            'username' => $request['email'],
            'email' => $request['email'],
            'password' => bcrypt($request['password_1'])
        ]);
        return view('auth.customer', compact('user'));
    }

    /**
     * Shows the register form.
     *
     * @param  string  $token
     * @return Response
     */
    public function verify($token)
    {
        $tempUser = TempUser::where('token', '=', $token)->firstOrFail();
        if($tempUser != null){
            DB::table('temp_users')->where('id', $tempUser->id)->update(['verified' => 1]);
        }
        return view('auth.register', compact('tempUser'));
    }

    public function loginControl(CheckEmailRequest $request)
    {
        $email = $request->email;
        $customer = Customer::where('billingEmail', '=', $email)->first();
        if($customer != null){
            return view('auth.login', compact('email'));
        }
        else{
            $user = User::where('email', '=', $email)->first();
            if($user != null){
                return view('auth.customer', compact('user'));
            }
            else{
                $tempUser = TempUser::where('email', '=', $email)->first();
                if($tempUser != null){
                    if($tempUser->verified){
                        // Show User form.
                        return view('auth.register', compact('tempUser'));
                    }
                    else{
                        // Show Message: Email not verified.
                        return view('auth.verifyEmail', compact('email'));
                    }
                }
                else{
                    // Create new TempUser
                    $token = str_random(40);
                    TempUser::create([
                        'email' => $email,
                        'token' => $token,
                        'verified' => 0
                    ]);
                    Mail::send('emails.verifyEmail', compact('token'), function ($m) use ($email) {
                        $m->from('noreply@cocobrico.com', 'Cocobrico Europe Ltd.');
                        $m->to($email,$email)->subject('Verify your email adress!');
                    });
                    return view('auth.verifyEmail', compact('email'));
                }
            }
        }

    }
}
