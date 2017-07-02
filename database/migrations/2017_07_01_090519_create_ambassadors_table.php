<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbassadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambassadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ambassadorDate');
            $table->string('serviceContent');
            $table->string('serviceLocation');
            $table->integer('reserveCount')->unsigned();
            $table->string('categoryName');
            $table->string('name');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('contactTime');
            $table->string('message')->nullable();
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
        Schema::dropIfExists('ambassadors');
    }
}
