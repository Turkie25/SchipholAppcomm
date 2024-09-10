<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Nullable for guest users
            $table->string('flight_number'); // Single flight number for both flights
            $table->date('flight_date');
            $table->time('arrival_time'); // Arrival time of flight one
            $table->time('departure_time'); // Departure time of flight two
            $table->integer('transit_duration'); // Duration between flights
            $table->string('flight_one_name');
            $table->string('flight_one_location');
            $table->string('flight_two_name');
            $table->string('flight_two_location');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });


    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
}

