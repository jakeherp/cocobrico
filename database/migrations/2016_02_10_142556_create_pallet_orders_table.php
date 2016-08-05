<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalletOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pallet_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pallet_id')->default(0);
            $table->integer('pallet_category_id')->default(0);
            $table->integer('price_id')->default(0);
            $table->integer('amount')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pallet_orders');
    }
}
