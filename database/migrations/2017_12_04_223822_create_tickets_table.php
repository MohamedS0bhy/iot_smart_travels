<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trip_number_id')->unsigned();
            $table->integer('trip_date_id')->unsigned();
            $table->integer('trip_time_id')->unsigned();
            $table->integer('price_id')->unsigned();
            $table->integer('trip_duration_id')->unsigned();
            $table->string('qr');
            $table->integer('traveler_id')->unsigned();
            $table->integer('airline_id')->unsigned();
            $table->integer('from_city_id')->unsigned();
            $table->integer('to_city_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('passport_number_id')->unsigned();
            $table->foreign('trip_number_id')->references('id')->on('trips');
            $table->foreign('trip_date_id')->references('id')->on('trips');
            $table->foreign('trip_time_id')->references('id')->on('trips');
            $table->foreign('price_id')->references('id')->on('trips');
            $table->foreign('trip_duration_id')->references('id')->on('trips');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('traveler_id')->references('id')->on('travelers');
            $table->foreign('from_city_id')->references('id')->on('cities');
            $table->foreign('to_city_id')->references('id')->on('cities');
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->foreign('passport_number_id')->references('id')->on('travelers');
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
        Schema::dropIfExists('tickets');
    }
}
