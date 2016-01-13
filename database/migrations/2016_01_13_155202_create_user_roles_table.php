<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 100);
			$table->text('description');
			$table->tinyInteger('modifyCustomer')->default(0);
			$table->tinyInteger('modifyContainer')->default(0);
			$table->tinyInteger('modifyOrder')->default(0);
			$table->tinyInteger('loadList')->default(0);
			$table->tinyInteger('modifyPrice')->default(0);
			$table->tinyInteger('deleteOrder')->default(0);
			$table->tinyInteger('modifyPrices')->default(0);
			$table->tinyInteger('modifyCredit')->default(0);
			$table->tinyInteger('modifyBillOfLoading')->default(0);
			$table->tinyInteger('view')->default(0);
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
        Schema::drop('user_roles');
    }
}
