<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->unique();
			$table->string('firstname', 100)->default('');
			$table->string('lastname', 100)->default('');
            $table->string('password', 100)->default('');
			$table->integer('loginCounter')->default(0);
			$table->integer('failedLoginCounter')->default(0);
            $table->string('register_token');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
