<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Option;

use Auth;

class OptionsController extends Controller
{
    /**
     * Places an option.
     *
     * @param  string $reference
     * @return Response
     */
    public function placeOption(Request $request)
    {
        if($request->amount > 0){
        	for($i = 1; $i <= $request->amount; $i++){
        		$option = new Option();
        		$option->identity_id = Auth::user()->getActiveIdentity()->id;
        		$option->price = Option::get_default_price(false);
        		$option->orderReference = 'OPT' . Auth::user()->getActiveIdentity()->customerReference . date("y") . sprintf("%02d",(count(Auth::user()->getActiveIdentity()->options)+1));
        		$option->save();
        	}
        	return redirect('orders/container');
        }
        else{
        	return redirect()->back()->withErrors(['The total amount of options must be greater than zero!']);
        }
    }
}
