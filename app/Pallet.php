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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerReference', 'customerId', 'priceId', 'loadingDate', 'pdfInvoiceCBE', 'status', 'pickup', 'warehouseReference', 'warehouseId'
    ];
}
