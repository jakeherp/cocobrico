<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pallets', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('customerReference');
			$table->integer('addressId')->references('id')->on('addresses')->onDelete('cascade');
			$table->integer('priceId')->references('id')->on('prices')->onDelete('cascade');
			$table->date('loadingDate');
			// ORDER, CONFIRMED
			$table->string('pdfInvoiceCBE')->default('');
			$table->integer('status')->default(0);
			$table->tinyInteger('pickup')->default(0);
			$table->string('warehouseReference', 10)->default('');
			$table->integer('warehouseId');
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
        Schema::drop('pallets');
    }
}
