<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            //$table->bigIncrements('id');
            //$table->timestamps();
            $table->integer('room_no')->unsigned();
            $table->primary('room_no');
            $table->string('category');

            $table->foreign('category')->references('category')->on('room_des');
            $table->boolean('unavailable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
