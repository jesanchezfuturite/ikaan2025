<?php

namespace App\Http\Controllers\Front;

use Carbon;
use Request;
use Session;
use DB;
use App\Http\Controllers\Controller;                       // ← controlador base

// Modelos (ajusta el namespace real de tus modelos)
use App\Models\Calendar;
use App\Models\Client;
use App\Models\Deal;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\FoodInReservation;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Reservations;
use App\Models\Admision;

// Requests y librerías propias
use App\Http\Requests\Back\DataToReservationRequest;
use App\Library\Pastora;

require_once("conekta-php-master/lib/Conekta.php");

class FrontController extends Controller{

    public function index(){
        return view("front.home");
    }
    public function nosotros(){
        return view("front.nosotros");
    }
    public function  servicios(){
        return view("front.servicios");
    }
    public function  amenidades(){
        return view("front.amenidades");
    }
    public function  contacto(){
        return view("front.contacto");
    }
    public function  paquetePremium(){
        return view("front.paquete-premium");
    }
    public function  paqueteExpress(){
        return view("front.paquete-express");
    }
    public function  paqueteVillaSpa(){
        return view("front.paquete-villa-spa");
    }
    public function  paquetePlus(){
        return view("front.paquete-plus");
    }






    public function reservacion_ikaan(){
        return view("front.reservacion_ikaan");
    }
    public function hospedaje(){
        return view("front.hospedaje");
    }
    public function paquetes(){
        return view("front.paquetes");
    }
    public function spa(){
        return view("front.spa");
    }
    public function eventosEmpresariales(){
        return view("front.eventos-empresariales");
    }
    public function jardinesBoda(){
        return view("front.jardines-boda");
    }





    public function reservacion_ikaan_selecciona_habitacion(Request $request){

        //fecha_entrada
        //fecha_salida
        //numero_personas


        $fecha_entrada = Carbon::createFromFormat("d/m/Y", $request->fecha_entrada);
        $fecha_salida = Carbon::createFromFormat("d/m/Y", $request->fecha_salida);

        //Traemos todas las habitaciones que no tengan disponibilidad en esas fechas
        $rooms_no_available = array();
        $rooms_no_available_data = DB::select(DB::RAW('SELECT rooms.id FROM rooms JOIN calendars ON rooms.id = calendars.room_id
                                                  WHERE calendars.date BETWEEN "'.$fecha_entrada->format("Y-m-d").'" AND "'.$fecha_salida->format("Y-m-d").'"
                                                  GROUP BY rooms.id ORDER BY rooms.id'));

        foreach ($rooms_no_available_data as $available_datum) {
            $rooms_no_available[] = $available_datum->id;
        }

        if( count($rooms_no_available) > 0 ) {
            $rooms = Room::where("maximum_people", ">=", $request->numero_personas)->whereNotIn("id", $rooms_no_available);
        }else{
            $rooms = Room::where("maximum_people", ">=", $request->numero_personas);
        }


        return view("front.reservacion_ikaan_selecciona_habitacion", ["data" => $rooms, "fecha_entrada" => $request->fecha_entrada, "fecha_salida" => $request->fecha_salida, "numero_personas" => $request->numero_personas]);
    }


    public function reservacion_ikaan_confirma_tu_pago(Request $request){

        //"_token" => "Wn7WEq2BBqLrLxRfOCtAsNI5zzDDkZG0GQw7ykQl"
        //"room_id" => "2"
        //"fecha_entrada" => "13/09/2018"
        //"fecha_salida" => "20/09/2018"
        //"numero_personas" => "2"

        $room = Room::find($request->room_id);

        $costo_por_persona = 0;
        $subtotal = 0;
        $iva = 0;
        $total = 0;
        $total_noches = 0;
        $descount_promotion = 0;
        $fecha_entrada = Carbon::createFromFormat("d/m/Y", $request->fecha_entrada);
        $fecha_salida = Carbon::createFromFormat("d/m/Y", $request->fecha_salida);

        $total_noches = $fecha_entrada->diffInDays($fecha_salida);


        if( $request->numero_personas == 1 ){
            $costo_por_persona = $room->price_sencilla;
        }else{
            $costo_por_persona = $room->price_doble;
        }

        $subtotal = ($costo_por_persona * $request->numero_personas) * $total_noches;
        $iva = $subtotal *.16;
        $total = $subtotal + $iva;

        //Si la habitacion y/o paquete tiene promocion de reservacion?, le hacemos el descuento
        if( $room->has_deal() ){
            if( $room->get_deal["type"] == "reservacion" ) {
                $descount_promotion = $total * ($room->get_deal["reservacion_percent_deal"] / 100);
                $total = $total - $descount_promotion;
            }
        }


        session(['room_id' => $request->room_id]);
        session(['fecha_entrada' => $request->fecha_entrada]);
        session(['fecha_salida' => $request->fecha_salida]);
        session(['numero_personas' => $request->numero_personas]);
        session(['total_noches' => $total_noches]);

        session(['descount_promotion' => $descount_promotion]);
        session(['costo_por_persona' => $costo_por_persona]);
        session(['subtotal' => $subtotal]);
        session(['iva' => $iva]);
        session(['total' => $total]);

        return view("front.reservacion_ikaan_confirma_tu_pago", [ "data" => $room,
                                                                        "descount_promotion" => $descount_promotion,
                                                                        "fecha_entrada" => $request->fecha_entrada,
                                                                        "fecha_salida" => $request->fecha_salida,
                                                                        "numero_personas" => $request->numero_personas,
                                                                        "costo_por_persona" => $costo_por_persona,
                                                                        "subtotal" => $subtotal,
                                                                        "iva" => $iva,
                                                                        "total" => $total,
                                                                        "total_noches" => $total_noches
                                                                      ]);

    }


    public function validate_fields(DataToReservationRequest $request){

        $telefono = $request->telefono;
        if( substr($telefono, 0, 2) != 52 ){
            $telefono = 52 . $telefono;
        }

        $data = array();
        $data["tipo_pago"]                      = $request->tipo_pago;
        $data["nombre_completo"]                = $request->nombre_completo;
        $data["email"]                          = $request->email;
        $data["telefono"]                       = $request->telefono;
        $data["celular"]                        = $request->celular;
        $data["nombre_del_tarjetahabiente"]     = $request->nombre_del_tarjetahabiente;
        $data["numero_de_tarjeta_de_credito"]   = $request->numero_de_tarjeta_de_credito;
        $data["exp_mes"]                        = $request->exp_mes;
        $data["exp_anio"]                       = $request->exp_anio;
        $data["cvc"]                            = $request->cvc;

        return response()->json($data);
    }


    public function process_payment(Request $request){

        //        "tipo_pago" => "debito_credito"
        //        "nombre_completo" => "Cliente prueba"
        //        "email" => "demon@metodika.mx"
        //        "telefono" => "8110216961"
        //        "celular" => null
        //        "nombre_del_tarjetahabiente" => "test"
        //        "numero_de_tarjeta_de_credito" => "4242424242424242"
        //        "exp_mes" => "12"
        //        "exp_anio" => "21"
        //        "cvc" => "123"
        //        "token_id" => "tok_2jM3S7N5zMg4kScw2"

        $response = array();
        $response["error"] = false;
        $response["message"] = "";
        $PAYMENT_OBJECT = null;

        \Conekta\Conekta::setApiKey("key_FqiqnZjaRFMPJ2rqtnjcMg");
        \Conekta\Conekta::setApiVersion("2.0.0");

        $room_id = session("room_id");
        $fecha_entrada = session("fecha_entrada");
        $fecha_salida = session("fecha_salida");
        $numero_personas = session("numero_personas");
        $descount_promotion = session("descount_promotion");
        $costo_por_persona = session("costo_por_persona");
        $subtotal = session("subtotal");
        $iva = session("iva");
        $total = number_format(session("total"), 2, ".", "");
        $total_noches = session("total_noches");

        $fecha_entrada = Carbon::createFromFormat("d/m/Y", $fecha_entrada);
        $fecha_salida = Carbon::createFromFormat("d/m/Y", $fecha_salida);

        $registed_room = Room::find($room_id);
        $registed_deal = ($registed_room->has_deal()) ? Deal::find($registed_room->deal_id) : "";

        if( $request->tipo_pago == "debito_credito" ){

            //error
            //message
            //customer
            $customer_created = Pastora::create_customer($request->nombre_completo, $request->email, $request->telefono, $request->token_id);

            //No hubo error, hacemos el cobro
            if( !$customer_created["error"] ){
                //Hacemos el cobro
                $payment = Pastora::make_payment("renta de habitacion", $total, $customer_created["customer"]);

                if(!$payment["error"]){
                    $response["error"] = false;
                    $response["message"] = "Pago realizado correctamente";
                    $PAYMENT_OBJECT = $payment;
                }else{
                    $response["error"] = true;
                    $response["message"] = $payment["message"];
                }

            }else{
                $response["error"] = true;
                $response["message"] = $customer_created["message"];
            }

        }else if( $request->tipo_pago == "transferencia_bancaria" ){

            $payment = Pastora::make_order_spei("renta de habitacion", $total, $request->nombre_completo, $request->email, $request->telefono);

            if(!$payment["error"]){
                $response["error"] = false;
                $response["message"] = "Orden generada correctamente";
                $PAYMENT_OBJECT = $payment;
            }else{
                $response["error"] = true;
                $response["message"] = $payment["message"];
            }

        }else if( $request->tipo_pago == "oxxo_pay" ){

            $payment = Pastora::make_order_oxxo("renta de habitacion", $total, $request->nombre_completo, $request->email, $request->telefono);

            if(!$payment["error"]){
                $response["error"] = false;
                $response["message"] = "Orden generada correctamente";
                $PAYMENT_OBJECT = $payment;
            }else{
                $response["error"] = true;
                $response["message"] = $payment["message"];
            }

        }


        //Verificamos si ubo algun error al momento de generar el pago u orden, si no ubo registramos el cliente y la orden en BD
        if( !$response["error"] ){

            //Agregamos el cliente
            $client = new Client();
            $client->nombre_completo    = $request->nombre_completo;
            $client->email              = $request->email;
            $client->telefono           = $request->telefono;
            $client->celular            = $request->celular;
            $client->token_id           = $request->token_id;
            $client->save();

            //Agregamos la reservacion
            $reservation = new Reservation();
            $reservation->client_id             = $client->id;
            $reservation->room_id               = $registed_room->id;
            $reservation->order_id              = $PAYMENT_OBJECT["order"]->id;
            $reservation->total_noches          = $total_noches;
            $reservation->tipo_pago             = $request->tipo_pago;
            $reservation->SKU                   = Pastora::make_sku();
            $reservation->livemode              = $PAYMENT_OBJECT["order"]->livemode;
            $reservation->amount_conekta        = $PAYMENT_OBJECT["order"]->amount;
            $reservation->payment_status        = $PAYMENT_OBJECT["order"]->payment_status;
            $reservation->fecha_entrada         = $fecha_entrada->format("Y-m-d");
            $reservation->fecha_salida          = $fecha_salida->format("Y-m-d");
            $reservation->numero_personas       = $numero_personas;
            $reservation->descount_promotion    = $descount_promotion;
            $reservation->costo_por_persona     = $costo_por_persona;
            $reservation->subtotal              = $subtotal;
            $reservation->iva                   = $iva;
            $reservation->total                 = $total;
            $reservation->registed_room         = $registed_room;
            $reservation->registed_deal         = $registed_deal;

            if( $request->tipo_pago == "transferencia_bancaria" ){
                $reservation->spei_code = $PAYMENT_OBJECT["order"]->charges[0]["payment_method"]->receiving_account_number;
            }else if( $request->tipo_pago == "oxxo_pay" ){
                $reservation->spei_code = $PAYMENT_OBJECT["order"]->charges[0]["payment_method"]->reference;
            }

            $reservation->save();


            //Agregamos las fechas de reservacion al calendario para separar las fechas
            do{

                $calendars = new Calendar();
                $calendars->room_id = $registed_room->id;
                $calendars->date = $fecha_entrada->format("Y-m-d");
                $calendars->status = "rented";
                $calendars->client_id = $client->id;
                $calendars->save();

                $fecha_entrada->addDays(1)."<br>";

            }while( $fecha_entrada->lessThanOrEqualTo($fecha_salida) );


            //Enviamos email al cliente con reservasion
            Pastora::email_reservation_with_status($client, $reservation, $registed_room);


            $response["error"] = false;
            $response["message"] = url("platillos")."/".$reservation->SKU;
        }



        return response()->json($response);
    }


    public function platillos($sku)
    {

        $reservation = Reservation::where("SKU", $sku)->first();

        if ($reservation == null) {
            return redirect('/');
        }


        //Para cada tipo de comida, solamente traeremos bebidas y comidas. Pero cada una puede tener categorias diferentes
        $categorias_bebidas_desayuno = Food::where("type", "desayuno")->where("category", "bebida")->groupBy("food_category_id")->get();
        $categorias_comidas_desayuno = Food::where("type", "desayuno")->where("category", "comida")->groupBy("food_category_id")->get();

        $categorias_bebidas_comida = Food::where("type", "comida")->where("category", "bebida")->groupBy("food_category_id")->get();
        $categorias_comidas_comida = Food::where("type", "comida")->where("category", "comida")->groupBy("food_category_id")->get();

        $categorias_bebidas_cena = Food::where("type", "cena")->where("category", "bebida")->groupBy("food_category_id")->get();
        $categorias_comidas_cena = Food::where("type", "cena")->where("category", "comida")->groupBy("food_category_id")->get();


        $bedidas_desayuno = array();
        $comidas_desayuno = array();
        $bedidas_comida = array();
        $comidas_comida = array();
        $bedidas_cena = array();
        $comidas_cena = array();

        //Traemos todas las comidas y bebidas dependiendo de las categorias
        foreach ($categorias_bebidas_desayuno as $item) {
            $bedidas_desayuno[$item->category_get["title"]] = Food::where("type", "desayuno")->where("category", "bebida")->where("food_category_id", $item->food_category_id)->get();
        }

        foreach ($categorias_comidas_desayuno as $item) {
            $comidas_desayuno[$item->category_get["title"]] = Food::where("type", "desayuno")->where("category", "comida")->where("food_category_id", $item->food_category_id)->get();
        }

        foreach ($categorias_bebidas_comida as $item) {
            $bedidas_comida[$item->category_get["title"]] = Food::where("type", "comida")->where("category", "bebida")->where("food_category_id", $item->food_category_id)->get();
        }

        foreach ($categorias_comidas_comida as $item) {
            $comidas_comida[$item->category_get["title"]] = Food::where("type", "comida")->where("category", "comida")->where("food_category_id", $item->food_category_id)->get();
        }

        foreach ($categorias_bebidas_cena as $item) {
            $bedidas_cena[$item->category_get["title"]] = Food::where("type", "cena")->where("category", "bebida")->where("food_category_id", $item->food_category_id)->get();
        }

        foreach ($categorias_comidas_cena as $item) {
            $comidas_cena[$item->category_get["title"]] = Food::where("type", "cena")->where("category", "comida")->where("food_category_id", $item->food_category_id)->get();
        }



        return view("front.platillos", [
            "bedidas_desayuno"   => $bedidas_desayuno,
            "comidas_desayuno"   => $comidas_desayuno,
            "bedidas_comida"     => $bedidas_comida,
            "comidas_comida"     => $comidas_comida,
            "bedidas_cena"       => $bedidas_cena,
            "comidas_cena"       => $comidas_cena,
            "reservation"        => $reservation,
            "sku"                => $sku,
        ]);
    }


    public function test(){

        $client = Client::find(2);
        $reservation = Reservation::find(2);
        $registed_room = Room::find(3);

        $view = view("mail.payment_or_baucher_first_step", array("client" => $client, "reservation" => $reservation, "room" => $registed_room, "sku" => $reservation->SKU))->render();
        dd($view);

        //return view("mail.payment_or_baucher_first_step", array("client" => $client, "reservation" => $reservation, "room" => $registed_room, "sku" => $reservation->SKU));
    }


    public function save_food(Request $request){

        $response = array();
        $response["error"] = true;
        $response["message"] = "";

        //Buscamos la reservacion para saber el numero de dias
        $reservation = Reservation::where("SKU", $request->sku)->first();


        if($request->menu != null) {

            //Validamos cada noche que tenga seleccionado bebidas o comidas
            for ($i = 1; $i <= $reservation->total_noches; $i++) {
                if (!isset($request->menu[$i]["desayuno"]["bebida"])) {
                    $response["error"] = true;
                    $response["message"] = "Selecciona una bebida para el Desayuno del día " . $i . " ";
                    return response()->json($response);
                }
                if (!isset($request->menu[$i]["desayuno"]["comida"])) {
                    $response["error"] = true;
                    $response["message"] = "Selecciona tus alimentos para el Desayuno del día " . $i . " ";
                    return response()->json($response);
                }

                if (!isset($request->menu[$i]["comida"]["bebida"])) {
                    $response["error"] = true;
                    $response["message"] = "Selecciona una bebida para la Comida del día " . $i . " ";
                    return response()->json($response);
                }
                if (!isset($request->menu[$i]["comida"]["comida"])) {
                    $response["error"] = true;
                    $response["message"] = "Selecciona tus alimentos para el Comida del día " . $i . " ";
                    return response()->json($response);
                }

                if (!isset($request->menu[$i]["cena"]["bebida"])) {
                    $response["error"] = true;
                    $response["message"] = "Selecciona una bebida para la Cena del día " . $i . " ";
                    return response()->json($response);
                }
                if (!isset($request->menu[$i]["cena"]["comida"])) {
                    $response["error"] = true;
                    $response["message"] = "Selecciona tus alimentos para la Cena del día " . $i . " ";
                    return response()->json($response);
                }
            }

        }else{
            $response["error"] = true;
            $response["message"] = "Elige los alimentos de tu estancia";
            return response()->json($response);
        }


        //Si no hubo error, guardamos las comidas en la reservación reservasion
        $reservation->comments_in_food = $request->especificaciones;
        $reservation->save();

        //Ingresamos las comidas y bebidas para cada dia
        for ($i = 1; $i <= $reservation->total_noches; $i++) {

            $foods_in_reservation = new FoodInReservation();
            $foods_in_reservation->reservation_id = $reservation->id;
            $foods_in_reservation->food_id = $request->menu[$i]["desayuno"]["bebida"];
            $foods_in_reservation->day = $i;
            $foods_in_reservation->type = "desayuno";
            $foods_in_reservation->category = "bebida";
            $foods_in_reservation->save();

            $foods_in_reservation = new FoodInReservation();
            $foods_in_reservation->reservation_id = $reservation->id;
            $foods_in_reservation->food_id = $request->menu[$i]["desayuno"]["comida"];
            $foods_in_reservation->day = $i;
            $foods_in_reservation->type = "desayuno";
            $foods_in_reservation->category = "comida";
            $foods_in_reservation->save();

            $foods_in_reservation = new FoodInReservation();
            $foods_in_reservation->reservation_id = $reservation->id;
            $foods_in_reservation->food_id = $request->menu[$i]["comida"]["bebida"];
            $foods_in_reservation->day = $i;
            $foods_in_reservation->type = "comida";
            $foods_in_reservation->category = "bebida";
            $foods_in_reservation->save();

            $foods_in_reservation = new FoodInReservation();
            $foods_in_reservation->reservation_id = $reservation->id;
            $foods_in_reservation->food_id = $request->menu[$i]["comida"]["comida"];
            $foods_in_reservation->day = $i;
            $foods_in_reservation->type = "comida";
            $foods_in_reservation->category = "comida";
            $foods_in_reservation->save();

            $foods_in_reservation = new FoodInReservation();
            $foods_in_reservation->reservation_id = $reservation->id;
            $foods_in_reservation->food_id = $request->menu[$i]["cena"]["bebida"];
            $foods_in_reservation->day = $i;
            $foods_in_reservation->type = "cena";
            $foods_in_reservation->category = "bebida";
            $foods_in_reservation->save();

            $foods_in_reservation = new FoodInReservation();
            $foods_in_reservation->reservation_id = $reservation->id;
            $foods_in_reservation->food_id = $request->menu[$i]["cena"]["comida"];
            $foods_in_reservation->day = $i;
            $foods_in_reservation->type = "cena";
            $foods_in_reservation->category = "comida";
            $foods_in_reservation->save();

        }

        $response["error"] = false;
        $response["message"] = "Los alimentos de tu estancia se han guardado correctamente. Para dudas o aclaraciones comunicate al Tel. 81 83447761 o al Cel. 81 8176 4075.";
        $response["url"] = url("/");

        return response()->json($response);
    }


    public function admision($client_id){
        $admision = Reservations::find($client_id);
        return view('front.admision', array('admision'=>$admision));



    }




    public function admisionStore(Request $request){
        //Agregamos el cliente
        $client = new Admision();
        $client->folio                 = $request->folio;
        $client->nombre                = $request->nombre;
        $client->fecha_entrada         = $request->fecha_entrada;
        $client->fecha_salida          = $request->fecha_salida;
        $client->correo                = $request->email;
        $client->cumple                = $request->cumple;
        $client->telefono              = $request->telefono;
        $client->celular               = $request->celular;
        $client->fecha_aniversario     = $request->aniversario;
        $client->forma_pago            = $request->forma_pago;
        $client->lugar_asignado        = $request->lugar;
        $client->edad                  = $request->edad;
        $client->servicio_solicitado   = $request->serv_solicitado;
        $client->enfermedad            = $request->enfermedad;
        $client->alergia               = $request->alergias;
        $client->otro_alergia          = $request->aque_alergias;
        $client->otro_como_se_entero   = $request->redes_sociales;
        $client->save();
        return view("front.gracias-datos");

    }


}
