<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('factoryReference');
			$table->integer('customerReference');
			$table->integer('customerId')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('priceId')->references('id')->on('prices')->onDelete('cascade');
			$table->integer('containerId');
			$table->integer('billOfLoading');
			$table->date('loadingTime');
			$table->date('estimatedArrival');
			$table->date('actualArrival');
			// ORDER, CONFIRMED
			$table->string('portOfDestination', 255)->default('');
			$table->string('pdfInvoiceCMA', 255)->default('');
			$table->string('pdfInvoiceCBE', 255)->default('');
			$table->string('pdfBillOfLoading', 255)->default('');
			$table->string('pdfCertificateOfOrigin', 255)->default('');
			$table->string('pdfPackingList', 255)->default('');
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
        Schema::drop('containers');
    }
}
