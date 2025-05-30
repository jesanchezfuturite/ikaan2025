<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');

            $table->text("name");
            $table->enum("type", ["Reservacion", "Amenidades"]);
            $table->text("reservacion_days_set_deal"); //Lunes | Martes | Miercoles | Jueves | Viernes | Sabado | Domingo
            $table->double("reservacion_percent_deal")->default(0);
            $table->text("amenidades_include");
            $table->date("date_start_deal");
            $table->date("date_finish_deal");

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
        Schema::dropIfExists('deals');
    }
}
