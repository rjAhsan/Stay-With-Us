<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('type');
            $table->string('capasity');
            $table->string('beds');
            $table->string('city');
            $table->longText('description');
            $table->longText('address');
            $table->string('pin');
            $table->integer('rate');
            $table->longText('policy');
            $table->string('img_url');
            $table->integer('meal_id')->unsigned()->nullable();
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('locations');
    }
}
