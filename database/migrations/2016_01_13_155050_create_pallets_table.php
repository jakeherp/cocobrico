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
			$table->string('customerReference',20)->default('');
            $table->integer('identity_id')->default(0)->references('id')->on('identities')->onDelete('cascade');
			$table->integer('address_id')->default(0)->references('id')->on('addresses')->onDelete('cascade');
			$table->timestamp('loadingDate')->default('0000-00-00 00:00:00');
			$table->string('pdfInvoiceCBE')->default('');
			$table->integer('status')->default(0);
			$table->tinyInteger('pickup')->default(0);
			$table->string('warehouseReference', 10)->default('');
			$table->integer('warehouse_id')->default(0);
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
