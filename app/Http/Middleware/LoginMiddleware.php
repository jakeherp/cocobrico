<?php

namespace App\Http\Middleware;

use Closure;

use App\TempUser;
use App\User;
use App\Customer;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email = $request->email;
        $customer = Customer::where('billingEmail', '=', $email)->first();
        if($customer != null){
            return redirect('login/customer')->with('customer', $customer); // ->Auth\AuthController@login
            //return view('auth/login', compact('customer'));
        }
        else{
            $user = User::where('email', '=', $email)->first();
            if($user != null){
                return redirect('register/customer')->with('user', $user); // ->Auth\AuthController@customer
                //return view('auth/customer', compact('user'));
            }
            else{
                $tempUser = TempUser::where('email', '=', $email)->first();
                if($tempUser != null){
                    if($tempUser->confirmed){
                        // VERIFIED -> MAKE USER
                        return redirect('register/user')->with('tempUser', $tempUser); // ->Auth\TempUserController@user
                        //return view('auth/register', compact('tempUser'));
                    }
                    else{
                        // TEMPUSER -> NOT VERIFIED
                        return redirect('email/verify')->with('tempUser', $tempUser); // ->Auth\TempUserController@verifymsg
                        //return view('auth/verifyEmail', compact('email'));
                    }
                }
                else{
                    // MAKE TEMPUSER
                    return redirect('email')->with('email', $email); // ->Auth\TempUserController@create#
                    //return view('auth/email', compact('email'));
                }
            }
        }

        return $next($request);
    }
}
