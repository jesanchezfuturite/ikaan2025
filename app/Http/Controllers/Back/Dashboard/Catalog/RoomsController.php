<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Catalog;

use Carbon\Carbon;
use Illuminate\Http\Request;
use MetodikaTI\Calendar;
use MetodikaTI\Characteristic;
use MetodikaTI\Deal;
use MetodikaTI\Gallery;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Catalog\Room\EditRoomRequest;
use MetodikaTI\Http\Requests\Back\Catalogo\Room\CreateRoomRequest;
use MetodikaTI\Room;
use MetodikaTI\Habitaciones;
use DB;

class RoomsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Room::get();
        return view('back.dashboard.catalog.room.index', array('data'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deals = Deal::get()->pluck("name","id")->toArray();
        $deals = array(0 => "Selecciona oferta") + $deals;
        return view('back.dashboard.catalog.room.create', ["deal" => $deals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoomRequest $request)
    {

        //  name
        //  principal_photo
        //  imagen_galeria[]
        //  maximum_people
        //  price_sencilla
        //  price_doble
        //  caracteristica_name[]
        //  deal
        //                      fecha_disponibilidad

        $request->fecha_disponibilidad = explode(",", $request->fecha_disponibilidad);


        $response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];

        DB::beginTransaction();

        $data = new Room();
        $data->name              = $request->name;
        $data->maximum_people    = $request->maximum_people;
        $data->price_sencilla    = $request->price_sencilla;
        $data->price_doble       = $request->price_doble;
        $data->deal_id           = $request->deal;
        $data->type              = "habitacion";

        //Insertamos la imagen principal
        $file_name = str_replace(" ", "-", $request->name).".".$request->file("principal_photo")->getClientOriginalExtension();
        if( $request->file("principal_photo")->move("assets/img/room_images/", $file_name) ){
            $data->principal_photo = "assets/img/room_images/".$file_name;
        }


        if($data->save()){

            //Insertamos las imagenes de la galeria
            foreach($request->imagen_galeria as $key => $value){
                $file_name = str_replace(" ", "-", $request->name)."_".$key."_.".$request->imagen_galeria[$key]->getClientOriginalExtension();
                if( $request->imagen_galeria[$key]->move("assets/img/room_images/", $file_name) ){
                    $gallery = new Gallery();
                    $gallery->room_id = $data->id;
                    $gallery->path    = "assets/img/room_images/".$file_name;
                    $gallery->save();
                }
            }

            //Insertamos las caracteristicas
            foreach($request->caracteristica_name as $key => $value){
                $characteristics = new Characteristic();
                $characteristics->room_id   = $data->id;
                $characteristics->name      = $value;
                $characteristics->save();
            }


            //Insertamos las fechas de disponibilidad
            foreach($request->fecha_disponibilidad as $fecha) {
                $calendars = new Calendar();
                $calendars->room_id = $data->id;
                $calendars->date = Carbon::createFromFormat("m/d/Y", $fecha);
                $calendars->status = "no_available";
                $calendars->client_id = 0;
                $calendars->save();
            }

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/catalogo/habitaciones/")
            ];

        }else{

            DB::rollBack();

            $response = [
                'status' => false,
                'message' => 'No se ha podido crear el registro, intentalo nuevamente'
            ];

        }

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \MetodikaTI\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MetodikaTI\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function edit($room_id)
    {

        $room_id = base64_decode($room_id);

        $room = Room::find($room_id);

        $deals = Deal::get()->pluck("name","id")->toArray();
        $deals = array(0 => "Selecciona oferta") + $deals;

        return view('back.dashboard.catalog.room.edit', ['deal' => $deals, 'id' => $room_id, 'data' => $room]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MetodikaTI\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function update(EditRoomRequest $request, $id)
    {

        //  name
        //  principal_photo
        //  imagen_galeria[]
        //  maximum_people
        //  price_sencilla
        //  price_doble
        //  caracteristica_name[]
        //  deal
        //  fecha_disponibilidad

//        dd($id);

        $request->fecha_disponibilidad = explode(",", $request->fecha_disponibilidad);


        $response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];

        DB::beginTransaction();

        $data = Room::find($id);
        $data->name              = $request->name;
        $data->maximum_people    = $request->maximum_people;
        $data->price_sencilla    = $request->price_sencilla;
        $data->price_doble       = $request->price_doble;
        $data->deal_id           = $request->deal;

        //Insertamos la imagen principal si es que tiene imagen
        if( $request->hasFile("principal_photo") ) {

            //Eliminamos la imagen anterior
            if(file_exists($request->principal_photo)){
                unlink($data->principal_photo);
            }

            $file_name = str_replace(" ", "-", $request->name) . "." . $request->file("principal_photo")->getClientOriginalExtension();
            if ($request->file("principal_photo")->move("assets/img/room_images/", $file_name)) {
                $data->principal_photo = "assets/img/room_images/" . $file_name;
            }

        }


        if($data->save()){

            //Insertamos las imagenes de la galeria en caso de que los contenga
            if($request->imagen_galeria != null) {
                foreach ($request->imagen_galeria as $key => $value) {
                    $file_name = str_replace(" ", "-", $request->name) . "_" . $key . "_." . $request->imagen_galeria[$key]->getClientOriginalExtension();
                    if ($request->imagen_galeria[$key]->move("assets/img/room_images/", $file_name)) {
                        $gallery = new Gallery();
                        $gallery->room_id = $data->id;
                        $gallery->path = "assets/img/room_images/" . $file_name;
                        $gallery->save();
                    }
                }
            }

            //Insertamos las caracteristicas nuevas
            if($request->caracteristica_name != null) {
                foreach ($request->caracteristica_name as $key => $value) {
                    $characteristics = new Characteristic();
                    $characteristics->room_id = $data->id;
                    $characteristics->name = $value;
                    $characteristics->save();
                }
            }

            //Si ubo edicion de caracteristicas, las editamos
            if($request->caracteristica_edit != null) {
                foreach ($request->caracteristica_edit as $key => $value) {
                    $characteristics = Characteristic::find($key);
                    $characteristics->name = $value;
                    $characteristics->save();
                }
            }


            //Insertamos las fechas de disponibilidad
            //Primero eliminamos las fechas de disponibilidad, excepto donde client_id sea diferente de 0 y que room_id sea el del id de la habitacion a editar ya que estos son las que no han sido rentadas
            Calendar::where("room_id", $data->id)->where("client_id", 0)->delete();

            //Insertamos las nuevas fechas
            foreach($request->fecha_disponibilidad as $fecha) {
                $calendars = new Calendar();
                $calendars->room_id = $data->id;
                $calendars->date = Carbon::createFromFormat("m/d/Y", $fecha);
                $calendars->status = "no_available";
                $calendars->client_id = 0;
                $calendars->save();
            }

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/catalogo/habitaciones/")
            ];

        }else{

            DB::rollBack();

            $response = [
                'status' => false,
                'message' => 'No se ha podido crear el registro, intentalo nuevamente'
            ];

        }

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MetodikaTI\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdf $data)
    {
        $response = [
            'status' => false,
            'message' => 'No se ha podido eliminar la noticia.'
        ];

        $file = $data->url;

        if ($data->delete()) {

            if (file_exists($file)) {
                unlink($file);
            }
            $response = [
                'status' => true,
                'message' => 'Se ha eliminado con éxito la noticia.',
                'url' => route('index_pdf')
            ];
        }

        return response()->json($response);
    }


    public function remove_image($image_id){

        $response = [
            'status' => false,
            'message' => ''
        ];

        $gallery = Gallery::find($image_id);

        if(unlink($gallery->path)){

            if($gallery->delete()){

                $response = [
                    'status' => true,
                    'message' => 'Se ha eliminado la imagen correctamente'
                ];

            }else{

                $response = [
                    'status' => false,
                    'message' => 'No se ha podido eliminar la imagen'
                ];

            }

        }else{

            $response = [
                'status' => false,
                'message' => 'No se ha podido eliminar la imagen, intentalo nuevamente'
            ];

        }

        return response()->json($response);
    }


    public function remove_caracteristica($caracteristica_id){

        $response = [
            'status' => false,
            'message' => ''
        ];

        $caracteristica = Characteristic::find($caracteristica_id);

        if($caracteristica->delete()){

            $response = [
                'status' => true,
                'message' => 'Se ha eliminado la caracteristica correctamente'
            ];

        }else{

            $response = [
                'status' => false,
                'message' => 'No se ha podido eliminar la caracteristica, intentalo nuevamente'
            ];

        }

        return response()->json($response);
    }

}
