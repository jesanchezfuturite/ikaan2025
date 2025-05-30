<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Catalog;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MetodikaTI\Deal;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Catalogo\Offers\CreateOfferRequest;
use MetodikaTI\Http\Requests\Back\Catalogo\Offers\CreateAdmisionRequest;
use MetodikaTI\Http\Requests\Back\Catalogo\Offers\EditOfferRequest;
use MetodikaTI\Reservations;
use MetodikaTI\Room;
use MetodikaTI\Client;
use MetodikaTI\Admision;
use MetodikaTI\FolioClientes;
use MetodikaTI\InfoEstancias;
use MetodikaTI\Evaluaciones;
use Barryvdh\DomPDF\Facade as PDF;

class ReservationsController extends Controller{

    public function index(){
        $reserv = Reservations::get();
        return view('back.dashboard.catalog.reservations.index', array('reserv'=>$reserv));
    }
    public function verCliente($id){
        $id = base64_decode($id);
        $reserv = Reservations::find($id);
        return view('back.dashboard.catalog.reservations.informacion', array('reserv'=>$reserv));
    }
    /**/
    public function reservacion($id){
        $id = base64_decode($id);
        $reserv = Reservations::find($id);
        return view('back.dashboard.catalog.reservations.reservacion', array('reserv'=>$reserv));
    }
    public function create()
    {

        return view('back.dashboard.catalog.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOfferRequest $request)
    {
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
    public function edit($id)
    {

        $id = base64_decode($id);

        $data = Deal::find($id);

        return view('back.dashboard.catalog.offers.edit', ['id' => $id, 'data' => $data]);
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
    /*************/
   
    /**********/
    public function admision($id)
    {
        $id = base64_decode($id);
        $admision = Reservations::find($id);
        return view('back.dashboard.catalog.reservations.admision', array('admision'=>$admision));
    }
    public function admisionPdf($id) { 
        $id = base64_decode($id);
        $products = Reservations::find($id);
        $pdf = PDF::loadView('back.dashboard.catalog.reservations.pdf.admision', compact('products'));
        return $pdf->download('admision.pdf');
    }
    /**/
    public function folio($id) {
        $id = base64_decode($id);
        $folio = Reservations::find($id);
        return view('back.dashboard.catalog.reservations.folio', array('folio'=>$folio));
        //return view('back.dashboard.catalog.reservations.index');
    }
    /***************************************** FOLIO *******************************************************/
    public function folioPdf(Request $request, $id) { 

        $nombre_cliente  = $request->nombre_cliente;
        $id = base64_decode($id);
        $products = Reservations::find($id);
        $pdf = PDF::loadView('back.dashboard.catalog.reservations.pdf.folio', compact('products'));
        return $pdf->download($request->nombre_cliente.'.pdf');
    }
    public function editarEval(Request $request, $id) { 
        /**/
        //dd($request->folio);exit();
        if (isset($_POST["deposito"])) {
           $deposito = 1; 
        } else {
           $deposito = 0; 
        }
        /**************************************/
        if (isset($_POST["maca"])) {
           $maca = 1; 
        } else {
           $maca = 0; 
        }
        /**************************************/
        if (isset($_POST["menu"])) {
           $menu = 1; 
        } else {
           $menu = 0; 
        }
        /**************************************/
        if (isset($_POST["recibir_menu"])) {
           $recibir_menu = 1; 
        } else {
           $recibir_menu = 0; 
        }
        /**************************************/
        if (isset($_POST["especificaciones"])) {
           $especificaciones = 1; 
        } else {
           $especificaciones = 0; 
        }
        /**************************************/
        if (isset($_POST["espe_vero"])) {
           $espe_vero = 1; 
        } else {
           $espe_vero = 0; 
        }
        /**************************************/
        if (isset($_POST["espe_martin"])) {
           $espe_martin = 1; 
        } else {
           $espe_martin = 0; 
        }
        /**************************************/
        if (isset($_POST["ctrol_ingresos"])) {
           $ctrol_ingresos = 1; 
        } else {
           $ctrol_ingresos = 0; 
        }
        /**************************************/
        if (isset($_POST["agradecimientos"])) {
           $agradecimientos = 1; 
        } else {
           $agradecimientos = 0; 
        }
        $nombre_cliente  = $request->nombre_cliente;

        DB::beginTransaction();
        $folio = new FolioClientes(); 

        $folio->folio_reserv    =       "5";
        $folio->cliente         =       $request->nombre_cliente;
        $folio->cant_personas   =       $request->num_personas;
        $folio->villa           =       $request->tipo_habitacion;
        $folio->paquetes        =       $request->paquetes;
        $folio->telefono        =       $request->telefono;
        $folio->email           =       $request->email;
        $folio->promocion       =       $request->promocion;
        $folio->check_in        =       $request->check_in;
        $folio->check_out       =       $request->check_out;
        $folio->hora_llegada    =       $request->hora_llegada;
        $folio->cop_deposito    =       $deposito;
        $folio->dep_maca        =       $maca;
        $folio->env_menu        =       $menu;
        $folio->rec_menu        =       $recibir_menu;
        $folio->ficha_esp       =       $especificaciones;
        $folio->esp_vero        =       $espe_vero;
        $folio->esp_martin      =       $espe_martin;
        $folio->cntrol_ingresos =       $ctrol_ingresos;
        $folio->carta_agrade    =       $agradecimientos;
        $folio->comentarios     =       $request->observaciones;
        $folio->total           =       $request->total;
        $folio->anticipo        =       $request->anticipo;
        $folio->saldos          =       $request->saldos;
        $folio->extras          =       $request->extras;
        $folio->totalT          =       $request->total_num;


        $folio->created_at;
        $folio->save();




        $pdf = PDF::loadView('back.dashboard.catalog.reservations.pdf.folio', compact('request', 'deposito', 'maca', 'menu', 'recibir_menu','espe_vero', 'espe_martin','especificaciones', 'ctrol_ingresos', 'agradecimientos'));
        return $pdf->download($request->nombre_cliente.'.pdf');
        //dd($request->nombre_cliente);exit();
    }
    /************************************************************************************************
                            Estancias
    *************************************************************************************************/
    public function estancia($id){
        #vamos a buscar este registro si ya ha sido editado o bien es nuevo
        $id = base64_decode($id);

        $estancia = InfoEstancias::where('folio', $id)->get();
        $est = count($estancia);
        if ($est == 0) {
            $estancia = Reservations::find($id);
            return view('back.dashboard.catalog.reservations.estancia', array('estancia'=>$estancia));
        }else{
            $estancia = InfoEstancias::where('folio', $id)->get();
            foreach ($estancia as $estancia) {
                # code...
            }
            return view('back.dashboard.catalog.reservations.estancias-exis', array('estancia'=>$estancia));
            //dd($estancia);exit();
        }
        
        
    }
    public function estanciaGuardar(Request $request,$id){
        //dd($request);exit();
        $id = base64_decode($id);

        $estancia = InfoEstancias::where('folio', $id)->get();
        $est = count($estancia);
       
        #Buscamos si el id ya existe para editarlo o bien agregar uno nuevo
        if ($est == 0) {
            DB::beginTransaction();
            $info_estancias= new InfoEstancias(); 
            $info_estancias->folio               =$id;
            $info_estancias->serv_solicitado     =$request->serv_solicitado;
            $info_estancias->fecha_entrada       =$request->fecha_entrada;
            $info_estancias->fecha_salida        =$request->fecha_salida;
            $info_estancias->nombre_completo      =$request->nom_solicitado;
            $info_estancias->correo              =$request->correo;
            $info_estancias->num_persona         =$request->num_persona;
            $info_estancias->empresa             =$request->empresa;
            $info_estancias->direccion           =$request->direccion;
            $info_estancias->rfc                 =$request->rfc;
            $info_estancias->telefono            =$request->telefono;
            $info_estancias->celular             =$request->celular;
            $info_estancias->forma_pago          =$request->form_pago;
            $info_estancias->num_persona         =$request->num_persona;
            $info_estancias->total_pagar         =$request->total_pagar;
            $info_estancias->anticipo            =$request->anticipo;
            $info_estancias->saldo               =$request->saldo;
            $info_estancias->total               =$request->total;
            $info_estancias->inst_usar           =$request->inst_usar;
            $info_estancias->esp_evento          =$request->esp_evento;
            $info_estancias->serv_spa            =$request->serv_spa;
            $info_estancias->contacto_de         =$request->contacto_de;
            $info_estancias->seg_atendido        =$request->seg_atendido;
            $info_estancias->created_at;
            $info_estancias->save();

            $reserv = Reservations::get();

            $pdf = PDF::loadView('back.dashboard.catalog.reservations.pdf.estancia', compact('request', 'id'));
            return $pdf->download($request->correo.'.pdf');


            return view('back.dashboard.catalog.reservations.index', array('reserv'=>$reserv));

        }else{
            $info_estancias = InfoEstancias::where('folio', $id)->get();
            foreach ($info_estancias as $info_estancias) {
                $info_estancias->id;
            }
            $estancia = Reservations::find($info_estancias->id);
            DB::beginTransaction();
            $info_estancias->folio               =$id;
            $info_estancias->serv_solicitado     =$request->serv_solicitado;
            $info_estancias->fecha_entrada       =$request->fecha_entrada;
            $info_estancias->fecha_salida        =$request->fecha_salida;
            $info_estancias->nombre_completo     =$request->nom_solicitado;
            $info_estancias->correo              =$request->correo;
            $info_estancias->empresa             =$request->empresa;
            $info_estancias->direccion           =$request->direccion;
            $info_estancias->rfc                 =$request->rfc;
            $info_estancias->telefono            =$request->telefono;
            $info_estancias->celular             =$request->celular;
            $info_estancias->forma_pago          =$request->form_pago;
            $info_estancias->num_persona         =$request->num_persona;
            $info_estancias->total_pagar         =$request->total_pagar;
            $info_estancias->anticipo            =$request->anticipo;
            $info_estancias->saldo               =$request->saldo;
            $info_estancias->total               =$request->total;
            $info_estancias->inst_usar           =$request->inst_usar;
            $info_estancias->esp_evento          =$request->esp_evento;
            $info_estancias->serv_spa            =$request->serv_spa;
            $info_estancias->contacto_de         =$request->contacto_de;
            $info_estancias->seg_atendido        =$request->seg_atendido;
            $info_estancias->save();

            $reserv = Reservations::get();
            $pdf = PDF::loadView('back.dashboard.catalog.reservations.pdf.estancia', compact('request', 'id'));
            return $pdf->download($request->nom_solicitado.'.pdf');

            //return view('back.dashboard.catalog.reservations.index', array('reserv'=>$reserv));
        }

    }
}
