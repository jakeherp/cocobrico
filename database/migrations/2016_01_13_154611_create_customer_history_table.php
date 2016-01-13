<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_history', function (Blueprint $table) {
            $table->int('userID');
			$table->integer('customerId')->references('id')->on('customers')->onDelete('cascade');
			$table->text('remark')->default('');
			$table->increments('id');
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
        Schema::drop('customers_history');
    }
}
