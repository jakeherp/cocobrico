<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainerOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container_options', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('customerId')->references('id')->on('customers')->onDelete('cascade');
			$table->string('currency',3)->default('EUR');
			$table->double('value',7,2);
			$table->text('remark')->default('');
			$table->integer('counter',2);
			$table->integer('customerReference');
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
        Schema::drop('container_options');
    }
}
