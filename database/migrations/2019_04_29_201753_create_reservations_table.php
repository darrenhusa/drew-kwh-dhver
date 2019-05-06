<?php



use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;



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

        $table->integer('room_no')->unsigned();

        $table->foreign('room_no')->references('room_no')->on('rooms');

        $table->date('start_date');

        $table->date('end_date');

        $table->decimal('amount')->default(0.0);

        $table->bigInteger('customer_id')->unsigned();

        $table->foreign('customer_id')->references('id')->on('customers');

        //$table->timestamps();

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
