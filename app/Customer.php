<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'billingCompanyName',
    	'billingFirstName',
    	'billingLastName',
    	'billingAddress1',
    	'billingAddress2',
    	'billingCity',
    	'billingPostCode',
    	'billingCountry',
    	'billingPhone',
    	'billingFax',
    	'billingEmail',
    	'taxID',
    	'standardPriceID',
    	'currency',
    	'active',
    	'warehouseID',
    	'hotRemark',
    	'remark'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
