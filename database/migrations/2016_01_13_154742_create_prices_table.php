<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name')->default('');
			$table->text('description')->default('');	
            $table->boolean('standard')->default(0); // default price for this category
			$table->tinyInteger('type')->default(0); // 0 = Pallets, 1 = Container
            $table->integer('category_id')->default(0);
            $table->double('priceperkg')->default(0); // Price in EUR
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
        Schema::drop('prices');
    }
}
