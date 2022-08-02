<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('check_in');
            $table->date('check_out');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('host_id');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('total_amount');
            $table->string('advance')->nullable();
            $table->string('balance')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('bookings');
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
        Schema::dropIfExists('reservations');
    }
}
