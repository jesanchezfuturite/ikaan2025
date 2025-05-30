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
            $table->increments('id');
            $table->enum("type", ["habitacion", "paquete"]);
            $table->text("name");
            $table->text("principal_photo");
            $table->integer("maximum_people");
            $table->double("price_sencilla")->default(0.00);
            $table->double("price_doble")->default(0.00);
            $table->integer("deal_id")->default(0);
            $table->time("checkin");
            $table->time("checkout");
            $table->integer("nights");
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
        Schema::dropIfExists('rooms');
    }
}
