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
            $table->string('username', 100)->unique();
			$table->string('firstname', 50)->default('');
			$table->string('lastname', 50)->default('');
            $table->string('email', 100)->unique();
            $table->string('password', 100);
			$table->integer('role')->default(0);
			$table->integer('loginCounter')->default(0);
			$table->integer('failedLoginCounter')->default(0);
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
