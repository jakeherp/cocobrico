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
use App\PalletOrder;

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
        $identity = Auth::user()->getActiveIdentity();

    	$remark = $request->remark;
        $delivery = $request->delivery;

        $pallet->customerReference = Auth::user()->getActiveIdentity()->customerReference;
        $pallet->identity_id = $identity->id;

        if (strpos($delivery, 'w_') !== false) {
            // Pick up from warehouse
            $pallet->pickup = 1;
            $pallet->warehouse_id = (int)(str_replace('w_','',$delivery));
        }
        else{
            // Delivery to address
            $pallet->pickup = 2;
            $pallet->address_id = (int)(str_replace('d_','',$delivery));
        }

        $pallet->save();

        $categories = PalletCategory::all();
        foreach($categories as $category){
            // look through all categories and save the amount, the users offered from this
            $palletOrder = new PalletOrder();
            $palletOrder->pallet_category_id = $category->id;
            $palletOrder->price_id = $identity->getPalletPrice($category->id, 'EUR')->priceperkg;
            $palletOrder->amount = (int)$request['cat_' . $category->id];
            //return $palletOrder;
            $pallet->palletOrders()->save($palletOrder);
        }

    	return redirect('orders/pallets');
    }
}
