<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateCustomerRequest;

use App\Country;
use App\Customer;
use App\User;

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
    	$user = Auth::user();
    	$user->firstName = $request->billingFirstName;
    	$user->lastName = $request->billingLastName;
    	$user->save();

    	if ($request->hasFile('proofOfIncorporation')) {
    		if ($request->file('proofOfIncorporation')->isValid()) {
    			//$request->file('proofOfIncorporation')->move('/files/user_'.$user->id);
			}
		}

		$customer = new Customer();
		$customer->billingCompanyName = $request->billingCompanyName;
		$customer->billingFirstName = $request->billingFirstName;
		$customer->billingLastName = $request->billingLastName;
		$customer->billingAddress1 = $request->billingAddress1;
		$customer->billingAddress2 = $request->billingAddress2;
		$customer->billingCity = $request->billingCity;
		$customer->billingPostCode = $request->billingPostCode;
		$customer->billingCountry = $request->billingCountry;
		$customer->billingPhone = $request->billingPhone;
		$customer->billingFax = $request->billingFax;
		$customer->billingEmail = $user->email;
		$customer->taxID = $request->taxID;
		$user->customers()->save($customer);
		if($user->hasPermission('is_customer')){
			return redirect('dashboard');
		}
		else{
			Auth::logout();
			return redirect('/')->with('messages', ['You have successfully submitted your company details. A member of staff will check your entered details and will get in touch with you shortly.']);
		}
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
			return redirect('dashboard');
		}
	}
}
