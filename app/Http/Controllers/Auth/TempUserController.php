<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CheckEmailRequest;

use App\TempUser;
use Mail;

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
}
