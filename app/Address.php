<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'companyName', 'firstName', 'lastName', 'address1',
        'address2', 'city', 'postCode', 'country',
        'phone', 'fax', 'email', 'taxID'
    ];

    /**
     * Get the users associated with the address.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get the files associated with the address.
     */
    public function files()
    {
        return $this->hasMany('App\File');
    }
}
