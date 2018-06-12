<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
                            
            $table->increments('id');
            $table->integer('trip_number');
            $table->date('trip_date');
            $table->time('trip_time');
            $table->string('trip_duration');
            $table->string('price');
            $table->integer('airline_id')->unsigned();
            $table->integer('from_city_id')->unsigned();
            $table->integer('to_city_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');   
            $table->foreign('from_city_id')->references('id')->on('cities');
            $table->foreign('to_city_id')->references('id')->on('cities');  
            $table->foreign('airline_id')->references('id')->on('airlines');    
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
        Schema::dropIfExists('trips');
    }
}
