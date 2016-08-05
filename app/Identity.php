<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Identity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'identities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerReference', 'taxID', 'standardPriceID', 'warehouseID'
    ];

    /**
     * Get the addresses associated with the identity.
     */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
     * Get the main address of the identity.
     *
     * @return Address
     */
    public function get_main_address()
    {
        return Address::where('identity_id','=',$this->id)->where('type','=',1)->first();
    }

    /**
     * Get the billing address of the identity.
     */
    public function getBillingAddress()
    {
        return $this->addresses()->where('type','=',1)->first();
    }

    /**
     * Get the recent orders of the identity.
     *
     * @return Array RecentOrders
     */
    public function getRecentOrders($amount = 0)
    {
        $orders = array();
        $i = 0;
        $pallets = $this->pallets()->orderBy('id', 'desc');

        if($amount == 0){
            $pallets = $pallets->get();
        }
        else{
            $pallets = $pallets->take($amount)->get();
        }

        foreach($pallets as $pallet){
            $i++;
            $orders[$i]['obj'] = $pallet;
            $orders[$i]['type'] = 'pallet';
            $orders[$i]['created_at'] = strtotime($pallet->created_at);
        }
        $options = $this->options()->orderBy('id', 'desc');

        if($amount == 0){
            $options = $options->get();
        }
        else{
            $options = $options->take($amount)->get();
        }

        foreach($options as $option){
            $i++;
            $orders[$i]['obj'] = $option;
            $orders[$i]['type'] = 'option';
            $orders[$i]['created_at'] = strtotime($option->created_at);
        }

        array_multisort(array_column($orders, 'created_at'), SORT_DESC, $orders);

        if($amount != 0){
            $orders = array_slice ($orders , 0 , $amount);
        }
        
        return $orders;
    }

    /**
     * Get the users associated with the identity.
     */
    public function users()
    {
        return $this->belongsToMany('App\User','user_identity')->withPivot('active', 'main');;
    }

    /**
     * Get the warehouse associated with the identity.
     */
    public function warehouse()
    {
        return $this->belongsToOne('App\Warehouse');
    }

    /**
     * Get the price for a special pallet category for the identity.
     */
    public function getPalletPrice($category_id, $currency)
    {
        $query = DB::table('identity_prices')
            ->select('price_id')
            ->where('identity_id', '=', $this->id)
            ->where('type', '=', 0)
            ->where('category_id', '=', $category_id)->first();
        if($query){
            $price = 5; //Price::find($query->price_id);
        }
        else{
            // There is no special price for the identity:
            $price = Price::where('category_id','=', $category_id)->where('standard','=', 1)->first();
        }
        return $price;
    }

    /**
     * Counts all pallet orders.
     *
     * @param integer $year
     * @return array $amounts
     */
    public function countPalletOrders($year)
    {
        $amounts = array();
        foreach(PalletCategory::all() as $category){  
            $amounts[$category->id] = 0;
            $orders = DB::table('pallets')
                ->leftJoin('pallet_orders', 'pallet_orders.pallet_id', '=', 'pallets.id')
                ->select('pallet_orders.amount as amount')
                ->where('pallets.identity_id', '=', $this->id)
                ->where('pallet_orders.pallet_category_id', '=', $category->id)
                ->where('pallets.created_at', 'like', '%' . $year . '%')
                ->get();
            foreach($orders as $order){
                $amounts[$category->id] += $order->amount;
            }
        }
        return $amounts;
    }

    /**
     * Get all of the prices for the identity.
     */
    public function prices()
    {
        return $this->belongsToMany('App\Price', 'identity_prices');
    }

    /**
     * Get all of the pallets ordered by the identity.
     */
    public function pallets()
    {
        return $this->hasMany('App\Pallet');
    }

    /**
     * Get all of the options ordered by the identity.
     */
    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
