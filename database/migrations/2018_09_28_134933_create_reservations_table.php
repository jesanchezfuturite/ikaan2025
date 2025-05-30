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
            $table->increments('id');

            $table->integer("client_id");
            $table->text("order_id");
            $table->text("tipo_pago");
            $table->text("SKU");
            $table->boolean("livemode");
            $table->double("amount_conekta");
            $table->text("payment_status");

            $table->date("fecha_entrada");
            $table->date("fecha_salida");
            $table->integer("numero_personas");
            $table->double("descount_promotion");
            $table->double("costo_por_persona");
            $table->double("subtotal");
            $table->double("iva");
            $table->double("total");

            $table->text("spei_code");

            $table->longText("registed_room");
            $table->longText("registed_deal");

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
