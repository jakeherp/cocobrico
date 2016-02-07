<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->default(1);    // 1 = billing, 2 = shipping, 3 = forwarding
            $table->string('companyName', 255)->default('');
            $table->string('firstName', 255)->default('');
            $table->string('lastName', 255)->default('');
            $table->string('address1', 255)->default('');
            $table->string('address2', 255)->default('');
            $table->string('city', 255)->default('');
            $table->string('postCode', 255)->default('');
            $table->integer('country')->default(0);
            $table->string('phone', 255)->default('');
            $table->string('fax', 255)->default('');
            $table->string('email', 255)->default('');
            
            $table->integer('standardPriceID')->default(0);
            $table->string('taxID', 255)->default('');

            $table->string('currency', 3)->default('EUR');
            $table->boolean('active')->default(true);
            $table->integer('warehouseID')->default(0);

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
        Schema::drop('addresses');
    }
}
