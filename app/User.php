<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'register_token', 'verified'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Creates a new user only with his email and a randome token.
     *
     * @param  string $email
     * @return string $token
     */
    public function registerEmail($email){
        $token = str_random(40);
        User::create([
            'username' => $email,
            'email' => $email,
            'verified' => 0,
            'register_token' => $token
        ]);
        /*Mail::send('emails.verifyEmail', compact('token'), function ($m) use ($email) {
            $m->from('noreply@cocobrico.com', 'Cocobrico Europe Ltd.');
            $m->to($email,$email)->subject('Verify your email adress!');
        });*/
        return $token;
    }
}
