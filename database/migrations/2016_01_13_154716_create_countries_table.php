<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
			$table->string('countryCode', 2)->unique();
			$table->integer('continent', 2)->default(0);
			$table->tinyInteger('exclusivity', 2)->default(0);
			$table->string('notificationEmail', 100)->default('admin@cocobrico.com');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
