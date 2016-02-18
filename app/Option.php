<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'options';

    /**
     * Get the default price of an option.
     *
     * @param boolean $format
     * @return double $value
     */
    public static function get_default_price($format = true)
    {
    	$value = Option::where('identity_id', '=', 0)->first()->price;
        if($format){
            return number_format ($value , 2 , '.' , '&#39;' );
        }
        else{
            return $value;
        }
    }
}
