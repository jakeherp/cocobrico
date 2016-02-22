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

    /**
     * Gives back, if the option order has a given status.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function getStatus()
    {
        $status = OrderStatus::where('type','=',1)->where('type_id','=',$this->id)->orderBy('id', 'desc')->first();
        if(count($status) == 0){
            return 'statuserror';
        }
        else{
            return $status->slug;
        }
    }

    /**
     * Toggles a status of a option order.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function toggleStatus($slug)
    {
        $status = OrderStatus::where('type','=',1)->where('slug','=',$slug)->where('type_id','=',$this->id)->first();
        if(count($status) === 1){
            $status->delete();
        }
        else{
           $newStatus = new OrderStatus();
           $newStatus->type = 1;
           $newStatus->type_id = $this->id;
           $newStatus->slug = $slug;
           $newStatus->save();
        }
    }
}
