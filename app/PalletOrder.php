<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalletOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pallet_orders';

    /**
     * Get the category associated with the order.
     */
    public function category()
    {
        return $this->belongsTo('App\PalletCategory','pallet_category_id');
    }

    /**
     * Get the price associated with the order.
     */
    public function price()
    {
        return $this->belongsTo('App\Price','price_id');
    }

    /**
     * Get the total price for the pallet order.
     *
     * @param boolean $format
     * @return double $value
     */
    public function get_price($format = true)
    {
        $value = $this->amount * $this->category->weight * $this->category->unitsperbox * $this->category->boxesperpallet * $this->price->price_per_kg;
        if($format){
            return number_format ($value , 2 , '.' , '&#39;' );
        }
        else{
            return $value;
        }
    }
}
