<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalletCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pallet_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->double('weight');
            $table->double('lenght');
            $table->double('width');
            $table->double('priceperkg');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pallet_categories');
    }
}
