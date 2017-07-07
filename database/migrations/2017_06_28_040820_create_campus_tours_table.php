<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('campustourdate');
            $table->string('category');
            $table->string('categoryName');
            $table->integer('reserveCount')->unsigned();
            $table->string('name');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('email');
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
        Schema::dropIfExists('campus_tours');
    }
}
