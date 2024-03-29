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
            $table->integer('unitsperbox')->default(0);
            $table->integer('boxesperpallet')->default(0);
            $table->double('weight')->default(0.0);
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
        Schema::drop('pallet_categories');
    }
}
