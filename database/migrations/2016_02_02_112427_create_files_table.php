<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0);
            $table->integer('identity_id')->default(0);
            $table->integer('customer_id')->default(0);
            $table->string('slug', 100)->default('');
            $table->string('filename', 200)->default('');
            $table->string('name',200)->default('');
            $table->text('description')->default('');
            $table->boolean('downloadable')->default('0');
            $table->integer('downloads')->default('0');
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
        Schema::drop('files');
    }
}
