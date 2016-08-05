<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentityPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identity_id')->default(0);
            $table->integer('pallet_category_id')->default(0);
            $table->integer('price_id')->default(0);
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
        Schema::drop('identity_prices');
    }
}
