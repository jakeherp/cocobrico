<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Identity;
use App\PalletCategory;
use App\Price;
use App\User;
use App\Pallet;

use Auth;

class OrdersController extends Controller
{
    /**
	 * Creates a new palet order.
	 *
	 * @param  Request $request
	 * @return Response
	 */
    public function createOrderPallets(Request $request)
    {
        $pallet = new Pallet();

    	$categories = PalletCategory::all();
    	foreach($categories as $category){
            //pallet category order table needed
    	}

    	$remark = $request->remark;
        $delivery = $request->delivery;

        $pallet->idenity_id = Auth::user()->getActiveIdentity()->id;

        if (strpos($delivery, 'w_') !== false) {
            // Pick up from warehouse
            $pallet->warehouse_id = (int)(str_replace('w_','',$delivery));
        }
        else{
            // Delivery to address
            $pallet->address_id = (int)(str_replace('d_','',$delivery));
        }

        //$pallet->save();
    	return $pallet;
    }
}
