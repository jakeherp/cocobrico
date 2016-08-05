<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalletCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pallet_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weight', 'length', 'width', 'priceperkg'
    ];
}