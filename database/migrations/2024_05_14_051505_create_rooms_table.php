<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('RoomID');
            $table->string('RoomNumber');
            $table->string('RoomType', 50);
            $table->double('Rate'); //price
            $table->string('Availability', 50);
            $table->string('Insurance');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}