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
			$table->integer('billingCountry')->default(0);
			$table->string('billingPhone', 255)->default('');
			$table->string('billingFax', 255)->default('');
			$table->string('billingEmail', 255)->default('');
			$table->string('taxID', 255)->default('');
			$table->integer('standardPriceID')->default(0);
			$table->string('currency', 3)->default('EUR');
			$table->boolean('active')->default(true);
			$table->integer('warehouseID')->default(0);
			$table->text('hotRemark')->default('');
			$table->text('remark')->default('');
			$table->integer('loginCount')->default(0);
			$table->integer('loginFailedCount')->default(0);
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
