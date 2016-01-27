<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Country;

use Auth;

class CustomerController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

    /**
	 * Creates a new customer in the database.
	 *
	 * @param  CreateCustomerRequest $request
	 * @return Response
	 */
    public function create(CreateCustomerRequest $request){
		$customer = new Customer();
		$customer->save();
		return 'TEST';
	}

	/**
	 * Shows the customer creation form.
	 *
	 * @return Response
	 */
    public function creationForm(){
    	if(count(Auth::user()->customers) == 0){
			$countries = Country::getForView();
			return view('customer.create',compact('countries'));
		}
		else{
			return 'CUSTOMER EXISTS.';
		}
	}
}
