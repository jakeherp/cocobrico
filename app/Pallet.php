<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pallet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pallets';

    /**
     * Get the pallet orders associated with the pallet.
     */
    public function palletOrders()
    {
        return $this->hasMany('App\PalletOrder');
    }
}
