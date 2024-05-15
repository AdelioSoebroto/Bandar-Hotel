<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('ReservationID');
            $table->integer('NIKID')->nullable();
            $table->integer('RoomID')->nullable();
            $table->date('CheckInDate')->nullable();
            $table->date('CheckOutDate')->nullable();
            $table->integer('TotalAmount')->nullable();
            $table->string('idPenyewaanMobil', 3)->nullable();

            $table->foreign('NIKID')->references('NIKID')->on('guest')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('RoomID')->references('RoomID')->on('rooms')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}