<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'billingCompanyName', 'billingFirstName', 'billingLastName', 'billingAddress1',
        'billingAddress2', 'billingCity', 'billingPostCode', 'billingCountry',
        'billingPhone', 'billingFax', 'billingEmail', 'taxID'
    ];

    /**
     * Get the users associated with the customer.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get the files associated with the customer.
     */
    public function files()
    {
        return $this->hasMany('App\File');
    }
}
