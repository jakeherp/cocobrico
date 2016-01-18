<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CheckEmailRequest;

use App\TempUser;
use App\User;
use App\Customer;
use Mail;
use DB;

class TempUserController extends Controller
{
    /**
     * Creates a new temporarily user.
     *
     * @return Response
     */
    public function create(CheckEmailRequest $request){
    	$token = str_random(40);
    	$email = $request['email'];
    	TempUser::create([
            'email' => $email,
            'token' => $token,
            'confirmed' => 0
        ]);
        Mail::send('emails.verifyEmail', compact('token'), function ($m) use ($email) {
            $m->from('noreply@cocobrico.com', 'Cocobrico Europe Ltd.');
            $m->to($email,$email)->subject('Verify your email adress!');
        });
        return view('auth/verifyEmail', compact('email'));
    }

    /**
     * Verifies the email
     *
     * @param string $token
     * @return Response
     */
    public function verify($token){
        $tempUser = TempUser::where('token', '=', $token)->firstOrFail();

        DB::table('temp_users')
            ->where('token', $token)
            ->update(['confirmed' => 1]);

        return view('auth.register', compact('tempUser'));
    }

    /**
     * Shows message, that user has to verify his email.
     *
     * @return Response
     */
    public function verifymsg($tempUser){
        $email = $tempUser->email;
        return view('auth/verifyEmail', compact('email'));
    }

    /**
     * Shows form to create a new user.
     *
     * @return Response
     */
    public function user($tempUser){
        return view('auth.register', compact('tempUser'));
    }

    /**
     * Shows the email formular.
     *
     * @return Response
     */
    public function email(){
        return view('auth.email');
    }
}
