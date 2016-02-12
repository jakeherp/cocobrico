<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prices';

    /**
     * Get the price per kg.
     *
     * @param  string  $value
     * @return string
     */
    public function getPricePerKgAttribute($value)
    {
    	//$value = number_format ($value , 2 , '.' , '&#39;' );
        return $value;
    }

}
