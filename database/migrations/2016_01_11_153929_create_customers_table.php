<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
			$table->string('billingCompanyName', 255)->default('');
			$table->string('billingFirstName', 255)->default('');
			$table->string('billingLastName', 255)->default('');
			$table->string('billingAddress1', 255)->default('');
			$table->string('billingAddress2', 255)->default('');
			$table->string('billingCity', 255)->default('');
			$table->string('billingPostCode', 255)->default('');
			$table->int('billingCountry', 3)->default(0);
			$table->string('billingPhone', 255)->default('');
			$table->string('billingFax', 255)->default('');
			$table->string('billingEmail', 255)->default('');
			$table->string('taxID', 255)->default('');
			$table->string('shippingCompanyName', 255)->default('');
			$table->string('shippingFirstName', 255)->default('');
			$table->string('shippingLastName', 255)->default('');
			$table->string('shippingAddress1', 255)->default('');
			$table->string('shippingAddress2', 255)->default('');
			$table->string('shippingCity', 255)->default('');
			$table->string('shippingPostCode', 255)->default('');
			$table->int('shippingCountry', 3)->default(0);
			$table->string('shippingPhone', 255)->default('');
			$table->string('shippingFax', 255)->default('');
			$table->string('shippingEmail', 255)->default('');
			$table->string('forwarderCompanyName', 255)->default('');
			$table->string('forwarderFirstName', 255)->default('');
			$table->string('forwarderLastName', 255)->default('');
			$table->string('forwarderAddress1', 255)->default('');
			$table->string('forwarderAddress2', 255)->default('');
			$table->string('forwarderCity', 255)->default('');
			$table->string('forwarderPostCode', 255)->default('');
			$table->int('forwarderCountry', 3)->default(0);
			$table->string('forwarderPhone', 255)->default('');
			$table->string('forwarderFax', 255)->default('');
			$table->string('forwarderEmail', 255)->default('');
			$table->int('standardPriceID', 10)->default(0);
			$table->string('currency', 3)->default('EUR');
			$table->boolean('active')->default(true);
			$table->int('warehouseID', 10)->default(0);
			//$table->foreign('warehouseName')->references('warehouseID')->on('warehouses');
			$table->text('hotRemark')->default('');
			$table->text('remark')->default('');
			$table->int('loginCount', 10)->default(0);
			$table->int('loginFailedCount', 10)->default(0);
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
        Schema::drop('customers');
    }
}
