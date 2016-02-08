<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
     * Get the users associated with the identity.
     */
    public function users()
    {
        return $this->belongsToMany('App\User','user_identity');
    }

    /**
     * Get the warehouse associated with the identity.
     */
    public function warehouse()
    {
        return $this->belongsToOne('App\Warehouse');
    }
}
