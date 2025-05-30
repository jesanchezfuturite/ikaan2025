<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Catalog;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Admision\CreateAdmisionRequest;
use MetodikaTI\Http\Requests\Back\Admision\CreateServicioRequest;
use MetodikaTI\Admision;
use MetodikaTI\Servicio;
use MetodikaTI\Reservations;
use MetodikaTI\Evaluaciones;
use Barryvdh\DomPDF\Facade as PDF;

class CuestionarioController extends Controller
{
    public function admision(){
        $reserv = Reservations::get();
        $admision = Admision::get();
        return view('back.dashboard.cuestionario.admision.index', array('admision'=>$admision, 'reserv'=>$reserv));
    }
    public function create()
    {
        return view('back.dashboard.cuestionario.admision.create');
    }
    public function pdfOtro()
    {
        return view('back.dashboard.cuestionario.servicio.pdf');
    }
    public function store(Request $request) {
        
    	$response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];
        DB::beginTransaction();
        $data = new Admision();
        $data->folio               	  = $request->folio;
        $data->nombre              	  = $request->nombre;
        $data->fecha_entrada          = $request->fec_entrada;
        $data->fecha_salida           = $request->fec_salida;
        $data->fecha_nacimiento       = "2019-10-31";
        $data->correo                 = $request->correo_elec;
        $data->telefono               = $request->telefono;
        $data->celular                = $request->celular;
        $data->fecha_aniversario      = $request->fech_aniver;
        $data->forma_pago             = $request->forma_pago;
        $data->edad                   = $request->edad;
        $data->lugar_asignado         = $request->lugar_asignado;
        $data->servicio_solicitado    = $request->servicio_solic;
        $data->alguna_enfermedad      = $request->alguna_enfer;
        $data->otra_enfermedad        = $request->otra_enfermedad;
        $data->alergia                = $request->alergico;
        $data->otro_alergia           = $request->otro_alergia;
        $data->como_se_entero         = $request->como_se_entero;
        $data->otro_como_se_entero    = $request->otro_como_se_entero;
        $data->created_at;

        if($data->save()){
            DB::commit();
            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/cuestionario/admision/")
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

    public function update(Request $request, $id) { 
        /*;*/
        //dd($request->alergico);exit();
        $id = base64_decode($id);
        $response = [
            'status' => false,
            'message' => 'No se ha podido editar el registro'
        ];
        DB::beginTransaction();
        $data = Admision::find($id);
        $data->folio                  = $request->folio;
        $data->nombre                 = $request->nombre;
        $data->fecha_entrada          = $request->fec_entrada;
        $data->fecha_salida           = $request->fec_salida;
        $data->fecha_nacimiento       = $request->fec_nac;
        $data->cumple                 = $request->fec_nac;
        $data->correo                 = $request->correo_elec;
        $data->telefono               = $request->telefono;
        $data->celular                = $request->celular;
        $data->fecha_aniversario      = $request->fech_aniver;
        $data->forma_pago             = $request->forma_pago;
        $data->edad                   = $request->edad;
        $data->lugar_asignado         = $request->lugar_asignado;
        $data->servicio_solicitado    = $request->servicio_solic;
        $data->alguna_enfermedad      = $request->alguna_enfer;
        $data->otra_enfermedad        = $request->otra_enfermedad;
        $data->alergia                = $request->alergico;
        $data->otro_alergia           = $request->otro_alergia;
        $data->como_se_entero         = $request->como_se_entero;
        $data->otro_como_se_entero    = $request->otro_como_se_entero;
        $data->created_at;
        $data->save();




        $pdf = PDF::loadView('back.dashboard.cuestionario.admision.pdf.admision', compact('request', 'deposito', 'maca', 'menu', 'recibir_menu','espe_vero', 'espe_martin','especificaciones', 'ctrol_ingresos', 'agradecimientos'));
        return $pdf->download($request->nombre.'.pdf');
        //dd($request->nombre_cliente);exit();
    }
    
    public function Ver($id){
        $id = base64_decode($id);
        $admision = Admision::find($id);
        return view('back.dashboard.cuestionario.admision.admision', array('admision'=>$admision));
    }




    public function servicio(){
        $reserv = Reservations::get();
        $evaluaciones = Evaluaciones::get();
        return view('back.dashboard.cuestionario.servicio.index', array('reserv'=>$reserv, 'evaluaciones'=>$evaluaciones));
    }
    public function createServ()
    {
        return view('back.dashboard.cuestionario.servicio.create');
    }
    public function storeServ(CreateServicioRequest $request){
    	$response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];
        DB::beginTransaction(); 
        $data = new Servicio();
        $data->folio               	  = $request->folio;
        $data->nombre              	  = $request->nombre;
        $data->fecha_entrada          = $request->fec_entrada;
        $data->fecha_salida           = $request->fec_salida;
        $data->correo_elec            = $request->correo_elec;
        $data->telefono               = $request->telefono;
        $data->celular                = $request->celular;
        $data->serv_proporcionado     = $request->serv_proporcionado;
        $data->comodidad              = $request->comodidad;
        $data->limpieza               = $request->limpieza;
        $data->presentacion           = $request->presentacion;
        $data->calidad                = $request->calidad;
        $data->per_profesionalismo    = $request->per_profesionalismo;
        $data->act_servicio           = $request->act_servicio;
        $data->per_presentacion       = $request->per_presentacion;
        $data->observaciones          = $request->observaciones;
        $data->created_at;

        if($data->save()){
            DB::commit();
            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/cuestionario/admision/")
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
     public function evaluacion($id)
    {
        $id = base64_decode($id);
        $evaluacion = Reservations::find($id);
        return view('back.dashboard.cuestionario.servicio.evaluacion', array('evaluacion'=>$evaluacion));
    }
    public function verEvaluacion($id)
    {
        $id = base64_decode($id);
        $evaluacion = Evaluaciones::where('folio', $id)->get();
        foreach ($evaluacion as $evaluacion) {
            # code...
        }
        return view('back.dashboard.cuestionario.servicio.evaluacion_new', array('evaluacion'=>$evaluacion));
    }
    #
    #
    #Esta funcion es para guardar la evaluación
    public function decargarPdf(Request $request) {
        $response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];
        DB::beginTransaction();

        $buscar = Evaluaciones::where('folio', $request->id)->get();
        $resultBuscar = count($buscar);

        if ($request->mas_info == 'on') {
            $mas = 1;
        }else{
            $mas = 0;
        }


        if ($resultBuscar >= 1) {
            $id =$request->id;
            $reserv = Reservations::find($id);
            $reserv->pdf = 1;
            $reserv->save();

            $buscarR = Evaluaciones::where('folio', $request->id)->get();
            foreach ($buscar as $buscarR) {
                # code...
            }
            $buscarR->folio                =  $request->id;
            $buscarR->cliente              =  $request->nombre;
            $buscarR->fecha_entrada        =  $request->fecha_entrada; 
            $buscarR->fecha_salida         =  $request->fecha_salida; 
            $buscarR->correo               =  $request->email;  
            $buscarR->telefono             =  $request->telefono; 
            $buscarR->cel                  =  $request->celular;  
            $buscarR->serv_proporcionado   =  $request->serv_proporcionado; 
            $buscarR->paquete              =  $request->nom_paquete;  
            $buscarR->lugar_asignado       =  $request->lugar_asig;  
            $buscarR->comodidad            =  $request->comodidad; 
            $buscarR->limpieza             =  $request->limpieza; 
            $buscarR->calidad              =  $request->calidad;  
            $buscarR->profesionalismo      =  $request->profesionalismo; 
            $buscarR->presentacion         =  $request->presentacion; 
            $buscarR->act_servicio         =  $request->actitud_servicio; 
            $buscarR->p_presentacion       =  $request->presentacionP; 
            $buscarR->r_nombre             =  $request->nombre_recomendado; 
            $buscarR->r_telefono           =  $request->telefono_recomendado; 
            $buscarR->r_correo             =  $request->correo_recomendado;
            $buscarR->facebook             =  $request->facebook_recomendado;
            $buscarR->observaciones        =  $request->observacion;
            $buscarR->mas_info             =  $mas;
            $buscarR->updated_at;

            if($buscarR->save()){
                DB::commit();
                $ultimoId = $buscarR->id;
                $evaluacion = Evaluaciones::find($ultimoId);
                return view('back.dashboard.cuestionario.servicio.evaluacion_new', array('evaluacion' => $evaluacion ));

            }else{
                $response = [
                    'status' => false,
                    'message' => 'No se ha podido editar el registro, intentalo nuevamente'
                ];
            }
        }else{
            $id =$request->id;
            $reserv = Reservations::find($id);
            $reserv->pdf = 1;
            $reserv->save();

            $eval = new Evaluaciones();
            $eval->folio                =  $request->id;
            $eval->cliente              =  $request->nombre;
            $eval->fecha_entrada        =  $request->fecha_entrada; 
            $eval->fecha_salida         =  $request->fecha_salida; 
            $eval->correo               =  $request->email;  
            $eval->telefono             =  $request->telefono; 
            $eval->cel                  =  $request->celular;  
            $eval->serv_proporcionado   =  $request->serv_proporcionado; 
            $eval->paquete              =  $request->nom_paquete;  
            $eval->lugar_asignado       =  $request->lugar_asig;  
            $eval->comodidad            =  $request->comodidad; 
            $eval->limpieza             =  $request->limpieza;  
            $eval->calidad              =  $request->calidad; 
            $eval->profesionalismo      =  $request->profesionalismo; 
            $eval->presentacion         =  $request->presentacion; 
            $eval->act_servicio         =  $request->actitud_servicio; 
            $eval->p_presentacion       =  $request->presentacionP; 
            $eval->r_nombre             =  $request->nombre_recomendado; 
            $eval->r_telefono           =  $request->telefono_recomendado; 
            $eval->r_correo             =  $request->correo_recomendado;
            $eval->facebook             =  $request->facebook_recomendado;
            $eval->observaciones        =  $request->observacion;
            $eval->mas_info             =  $mas;
            $eval->created_at;

            if($eval->save()){
                DB::commit();
                $ultimoId = $eval->id;
                $evaluacion = Evaluaciones::find($ultimoId);
                return view('back.dashboard.cuestionario.servicio.evaluacion_new', array('evaluacion' => $evaluacion));
            }else{
                $response = [
                    'status' => false,
                    'message' => 'No se ha podido crear el registro, intentalo nuevamente'
                ];
            }

        }        
    }
    //
    //Solo descarga el pdf, cuando la evaluacion ya se ha llenado y despues de un tiempo deseen descarlo esta es la funcion
    public function decargarEvaluacion($id) {
        $id = base64_decode($id);
        $products = Evaluaciones::find($id);
        $pdf = PDF::loadView('back.dashboard.cuestionario.servicio.pdf', compact('products'));
        return $pdf->download($products->cliente.'.pdf');    
    }
}