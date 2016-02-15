<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Identity;
use App\PalletCategory;
use App\Price;
use App\Remark;
use App\User;
use App\Pallet;
use App\PalletOrder;
use App\Warehouse;

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

        $pallet->orderReference = 'P' . date("y") . date("m") . sprintf("%02d",(count(Pallet::all())+1));
        $pallet->identity_id = $identity->id;

      // Check if there are orders at all:
        $categories = PalletCategory::all();
        $sum = 0;
        foreach($categories as $key => $category){
            $sum += (int)$request['cat_' . $category->id];
            if((int)$request['cat_' . $category->id] == 0){
                unset($categories[$key]);
            }
        }

        if($sum == 0){
            return redirect()->back()->withInput()->withErrors(['The total amount of pallets must be greater than zero!']);
        }

      // Delivery Options:
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
        $pallet->toggleStatus('ordered');

      // Amounts of the different Pallet Categories:
        foreach($categories as $category){
            // look through all categories and save the amount, the users offered from this
            $palletOrder = new PalletOrder();
            $palletOrder->pallet_category_id = $category->id;
            $palletOrder->price_id = $identity->getPalletPrice($category->id, 'EUR')->id;
            $palletOrder->amount = (int)$request['cat_' . $category->id];
            $pallet->palletOrders()->save($palletOrder);
        }

      // Customer Remark:
        if($request->remark != ''){
            $remark = new Remark();
            $remark->slug = 'pallet';
            $remark->slug_id = $pallet->id;
            $remark->headline = 'Customer Remark';
            $remark->body = $request->remark;
            $remark->save();
        }

    	return redirect('orders/pallets');
    }

    /**
     * Shows the order details.
     *
     * @param  string $reference
     * @return Response
     */
    public function viewOrder($reference)
    {
        $user = Auth::user();
        $identity = $user->getActiveIdentity();
        if (strpos($reference, 'P') !== false) {
            // Pallet:
            $pallet = Pallet::where('orderReference','=',$reference)->first();
            if(count($pallet) > 0 AND $identity->id == $pallet->identity_id){
                return view('pages.orders.view', compact('user','identity','pallet'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            // Container:
                return 'CONTAINER';
        }
    }

    /**
     * Shows the form for copying a order.
     *
     * @param  string $reference
     * @return Response
     */
    public function copyOrder($reference)
    {
        $user = Auth::user();
        $identity = $user->getActiveIdentity();
        $warehouses = Warehouse::all();
        $categories = PalletCategory::all();
        if (strpos($reference, 'P') !== false) {
            // Pallet:
            $pallet = Pallet::where('orderReference','=',$reference)->first();
            if(count($pallet) > 0 AND $identity->id == $pallet->identity_id){
                if($pallet->pickup == 2){
                    // Delivery
                    $inputValues['delivery'] = 'd_' . $pallet->address_id;
                }
                else{
                    // Warehouse
                    $inputValues['delivery'] = 'w_' . $pallet->warehouse_id;
                }

                if(count($pallet->get_customer_remark()) > 0){
                    $inputValues['remark'] = $pallet->get_customer_remark()->body;
                }

                foreach($categories as $category){
                    $order = $pallet->palletOrders()->where('pallet_category_id','=',$category->id)->first();
                    $inputValues['cat_'.$category->id] = $order->amount;
                }
                return redirect('orders/pallets')->withInput($inputValues);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            // Container:
                return 'CONTAINER';
        }
    }

    /**
     * Toggles the cancel status of an order.
     *
     * @param  string $reference
     * @return Response
     */
    public function actionToggleCancelation(Request $request)
    {
        $reference = $request->orderReference;
        $user = Auth::user();
        $identity = $user->getActiveIdentity();
        if (strpos($reference, 'P') !== false) {
            // Pallet:
            $pallet = Pallet::where('orderReference','=',$reference)->first();
            if(count($pallet) > 0 AND $identity->id == $pallet->identity_id){
                $pallet->toggleStatus('cancelled');
            }
            return redirect()->back();
        }
        else{
            // Container:
                return 'CONTAINER';
        }
    }
}
