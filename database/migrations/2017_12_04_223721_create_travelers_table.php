<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
                    
            $table->increments('id');
            $table->string('name');
            $table->string('nationality');
            $table->string('email');
            $table->bigInteger('phone_number');            
            $table->bigInteger('passport_number');
            $table->bigInteger('qr');
            $table->integer('airline_id')->unsigned();        
            $table->integer('from_city_id')->unsigned();
            $table->integer('to_city_id')->unsigned();
            $table->integer('trip_date_id')->unsigned();
           
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');              
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->foreign('from_city_id')->references('id')->on('cities');
            $table->foreign('to_city_id')->references('id')->on('cities');
            $table->foreign('trip_date_id')->references('id')->on('trips'); 
             
            $table->bigInteger('credit_number');
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
        Schema::dropIfExists('travelers');
    }
}
