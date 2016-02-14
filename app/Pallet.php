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

    /**
     * Get the pallet orders associated with the pallet.
     */
    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    /**
     * Get the remarks associated with the pallet.
     */
    public function get_remarks()
    {
        return Remark::where('slug','=','pallet')->where('slug_id','=',$this->id)->get();
    }

    /**
     * Get the first remark associated with the pallet.
     */
    public function get_customer_remark()
    {
        return Remark::where('slug','=','pallet')->where('slug_id','=',$this->id)->where('headline', '=', 'Customer Remark')->first();
    }

    /**
     * Get the total price for the pallet.
     *
     * @param boolean $format
     * @return double $value
     */
    public function get_total_price($format = true)
    {
        $value = 0;
        foreach($this->palletOrders as $order){
            $value += $order->get_price(false);
        }
        if($format){
            return number_format ($value , 2 , '.' , '&#39;' );
        }
        else{
            return $value;
        }
    }

    /**
     * Gives back, if the pallet order has a given status.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function hasStatus($slug)
    {
        $status = OrderStatus::where('type','=',0)->where('slug','=',$slug)->where('type_id','=',$this->id)->get();
        if(count($status) === 1){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Gives back, if the pallet order has a given status.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function getStatus()
    {
        $status = OrderStatus::where('type','=',0)->where('type_id','=',$this->id)->orderBy('id', 'desc')->first();
        if(count($status) == 0){
            return 'statuserror';
        }
        else{
            return $status->slug;
        }
    }

    /**
     * Toggles a status of a pallet order.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function toggleStatus($slug)
    {
        $status = OrderStatus::where('type','=',0)->where('slug','=',$slug)->where('type_id','=',$this->id)->first();
        if(count($status) === 1){
            $status->delete();
        }
        else{
           $newStatus = new OrderStatus();
           $newStatus->type = 0;
           $newStatus->type_id = $this->id;
           $newStatus->slug = $slug;
           $newStatus->save();
        }
    }
}
