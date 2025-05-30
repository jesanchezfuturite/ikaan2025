<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Reservations;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MetodikaTI\Deal;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Catalogo\Offers\CreateOfferRequest;
use MetodikaTI\Http\Requests\Back\Catalogo\Offers\EditOfferRequest;
use MetodikaTI\Reservation;
use MetodikaTI\Room;

class ReservationOnWebsiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Reservation::get();
        return view('back.dashboard.reservations.reservations_web.index', array('data'=>$data));
    }

    public function show($reservation_id){

        $reservation_id = base64_decode($reservation_id);
        $reservation = Reservation::find($reservation_id);

        return view('back.dashboard.reservations.reservations_web.view', array('reservation' => $reservation));
    }

    public function store_reservation(){
        
    }





















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('back.dashboard.reservations.reservations_web.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOfferRequest $request)
    {

        //name
        //type
        //reservacion_percent_deal
        //amenidades_include
        //date_start_deal
        //date_finish_deal


        $response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];

        DB::beginTransaction();

        $data = new Deal();
        $data->name                         = $request->name;
        $data->type                         = $request->type;
        $data->reservacion_percent_deal     = ($request->type == "reservacion") ? $request->reservacion_percent_deal : 0;
        $data->amenidades_include           = ($request->type == "amenidades")  ? $request->amenidades_include : "";
        $data->date_start_deal              = Carbon::createFromFormat("d/m/Y", $request->date_start_deal)->format("Y-m-d");
        $data->date_finish_deal             = Carbon::createFromFormat("d/m/Y", $request->date_finish_deal)->format("Y-m-d");

        if($data->save()){

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/catalogo/ofertas/")
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MetodikaTI\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $id = base64_decode($id);

        $data = Deal::find($id);

        return view('back.dashboard.reservations.reservations_web.edit', ['id' => $id, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MetodikaTI\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function update(EditOfferRequest $request, $id)
    {

        //name
        //type
        //reservacion_percent_deal
        //amenidades_include
        //date_start_deal
        //date_finish_deal


        $response = [
            'status' => false,
            'message' => 'No se ha podido editar el registro'
        ];

        DB::beginTransaction();

        $data = Deal::find($id);
        $data->name                         = $request->name;
        $data->type                         = $request->type;
        $data->reservacion_percent_deal     = ($request->type == "reservacion") ? $request->reservacion_percent_deal : 0;
        $data->amenidades_include           = ($request->type == "amenidades")  ? $request->amenidades_include : "";
        $data->date_start_deal              = Carbon::createFromFormat("d/m/Y", $request->date_start_deal)->format("Y-m-d");
        $data->date_finish_deal             = Carbon::createFromFormat("d/m/Y", $request->date_finish_deal)->format("Y-m-d");

        if($data->save()){

            DB::commit();

            $response = [
                'status' => true,
                'message' => 'Se ha editado el registro con exito.',
                'url' => url("cms/dashboard/catalogo/ofertas/")
            ];

        }else{

            DB::rollBack();

            $response = [
                'status' => false,
                'message' => 'No se ha podido editar el registro, intentalo nuevamente'
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
    public function destroy($id)
    {

        $id = base64_decode($id);

        $response = [
            'status' => false,
            'message' => 'No se ha podido eliminar la noticia.'
        ];

        $data = Deal::find($id);

        if ($data->delete()) {

            Room::where("deal_id", $id)->update(["deal_id" => 0]);

            $response = [
                'status' => true,
                'message' => 'Se ha eliminado con éxito el registro.',
                'url' => url('cms/dashboard/catalogo/ofertas')
            ];
        }

        return response()->json($response);
    }



}
