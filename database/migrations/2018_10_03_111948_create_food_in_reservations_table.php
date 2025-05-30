<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodInReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_in_reservations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("reservation_id");
            $table->integer("food_id");
            $table->integer("day");
            $table->integer("type");
            $table->integer("category");

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
        Schema::dropIfExists('food_in_reservations');
    }
}
