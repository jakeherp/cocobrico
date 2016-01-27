<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckPasswordRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password'        =>  ['required','same:password_2','min:8'],
            'password_2'        =>  ['required'],
            'register_token'    =>  ['required','exists:users,register_token'],
            'email'             =>  ['required','email','exists:users,email'], // Custom validation rule search for user with email and token!
        ];
    }
}
