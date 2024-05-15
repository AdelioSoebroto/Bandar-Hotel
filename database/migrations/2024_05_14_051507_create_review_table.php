<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Review', function (Blueprint $table) {
            $table->increments('ReviewID');
            $table->integer('ReservationID')->unsigned();
            $table->string('Rating', 50);
            $table->string('Comment', 100);
            $table->date('InputDate');
            $table->string('TravelType', 50);

            $table->foreign('ReservationID')->references('ReservationID')->on('Reservation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Review');
    }
}