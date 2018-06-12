<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Flights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('flights', function (Blueprint $table) {
          $table->increments('id');
          $table->tinyInteger('flight_status');
          $table->integer('from_city')->unsigned();
          $table->integer('to_city')->unsigned();
          $table->integer('airline')->unsigned();
          $table->integer('airplane')->unsigned();
          $table->double('distance');
          $table->double('cost');
          $table->foreign('from_city')->references('id')->on('cities');
          $table->foreign('to_city')->references('id')->on('cities');
          $table->foreign('airline')->references('id')->on('airlines');
          $table->foreign('airplane')->references('id')->on('airplanes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
