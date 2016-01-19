<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateCustomerRequest;

use App\Customer;

class CustomerController extends Controller
{
    /**
     * Creates a new customer.
     *
     * @return Response
     */
    public function create(CreateCustomerRequest $request){
        Customer::create($request);
        $email = $request->email;
        return view('auth/login', compact('email'));
    }
}
