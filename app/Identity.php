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
}
