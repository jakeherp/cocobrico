<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateAddressRequest;

use App\Country;
use App\Address;
use App\File;
use App\User;

use Auth;

class AddressController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

    /**
	 * Creates a new address in the database.
	 *
	 * @param  CreateCustomerRequest $request
	 * @return Response
	 */
    public function create(CreateAddressRequest $request){
    	$user = Auth::user();
    	$user->firstName = $request->firstName;
    	$user->lastName = $request->lastName;
    	$user->save();

		$address = new Address();
		$address->companyName = $request->companyName;
		$address->firstName = $request->firstName;
		$address->lastName = $request->lastName;
		$address->address1 = $request->address1;
		$address->address2 = $request->address2;
		$address->city = $request->city;
		$address->postCode = $request->postCode;
		$address->country = $request->country;
		$address->phone = $request->phone;
		$address->fax = $request->fax;
		$address->email = $user->email;
		$address->taxID = $request->taxID;
		$user->addresses()->save($address);

		if ($request->hasFile('proofOfIncorporation')) {
    		if ($request->file('proofOfIncorporation')->isValid()) {
    			$file = $request->file('proofOfIncorporation');
    			$destinationPath = '/files/address_' . $address->id;
    			$upload = new File();
    			$filename = $upload->uploadFile($file, $destinationPath);
    			if(!$filename){
    				return redirect()->back()->withInput()->withErrors(['Fileupload did not work!']);
    			}
    			else{
    				$upload->slug = 'proofOfIncorporation';
    				$upload->user_id = $user->id;
    				$upload->address_id = $address->id;
    				$upload->name = 'Proof of Incorporation - ' . $address->companyName;
    				$upload->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.';
    				$upload->filename = 'address_' . $address->id . '/' . $filename;
    				$upload->save();
    			}
			}
		}

		if($user->hasPermission('is_customer')){
			// If the user has already been activated, he will be redirected to the dashboard.
			return redirect('dashboard');
		}
		else{
			// If the user has not been activated yet, he will be logged out and get a message.
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
		$countries = Country::getForView();
		$user = Auth::user();
		return view('pages.address',compact('user','countries'));
	}

	/**
	 * Creates a new pallet order.
	 *
	 * @return Response
	 */
    public function createOrderPallets(){
    	
	}
}
