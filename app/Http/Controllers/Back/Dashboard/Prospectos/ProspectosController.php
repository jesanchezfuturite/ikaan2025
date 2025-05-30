<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Prospectos;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Lealtad;
use MetodikaTI\Prospectos;

class ProspectosController extends Controller
{
    public function index(){
        $prospectos = Prospectos::get();
        return view('back.dashboard.prospectos.index', array('prospectos'=>$prospectos));
    }
    /**/
    public function create() {
    	$lealtad = Lealtad::get();
        return view('back.dashboard.prospectos.create', array('lealtad'=>$lealtad));
    }
    public function store(Request $request) { 
        //dd($request);exit();
    	$response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];
        DB::beginTransaction();
        $prospectos = new Prospectos();

        $prospectos->prospecto  		= $request->prospecto;
        $prospectos->id_lealtad  		= $request->lealtad;
        $prospectos->fech_cumple  	= $request->fech_cumple;
        $prospectos->fech_aniv  		= $request->fech_aniv;
        $prospectos->edad  			= $request->edad;
        $prospectos->correo  			= $request->correo;
        $prospectos->telefono  		= $request->telefono;
        $prospectos->medio  			= $request->medio;
        $prospectos->otro_medio  		= $request->otro_medio;
        $prospectos->inf_solicitada  	= $request->inf_solicitada;
        $prospectos->paquete  		= $request->paquete;
        $prospectos->num_personas 	= $request->num_personas;
        $prospectos->env_info  		= $request->env_informacion;
        $prospectos->recibir_info  	= $request->recibir_info;
        $prospectos->alergia  		= $request->alergia;
        $prospectos->a_que_alergico  	= $request->a_que_alergico;
        $prospectos->enfermedad  		= $request->enfermedad;
        $prospectos->otra_enfermedad  = $request->otra_enfermedad;
        $prospectos->comentarios  	= $request->comentarios;

        $prospectos->created_at;        
        if($prospectos->save()){
       		DB::commit();
            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/catalogo/prospectos/")
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
    /**/
    public function edit($id) {
        $id = base64_decode($id);
        $prospectos = Prospectos::find($id);
        $lealtad = Lealtad::get();

        return view('back.dashboard.prospectos.edit', array('prospectos'=>$prospectos, 'lealtad'=>$lealtad));
    }
    /**/
    public function update(Request $request, $id){
        $response = [
            'status' => false,
            'message' => 'No se ha podido editar el registro'
        ];

        DB::beginTransaction();

        $prospectos = Prospectos::find($id);
        $prospectos->prospecto          = $request->prospecto;
        $prospectos->id_lealtad         = $request->lealtad;
        $prospectos->fech_cumple    = $request->fech_cumple;
        $prospectos->fech_aniv          = $request->fech_aniv;
        $prospectos->edad           = $request->edad;
        $prospectos->correo             = $request->correo;
        $prospectos->telefono       = $request->telefono;
        $prospectos->medio              = $request->medio;
        $prospectos->otro_medio         = $request->otro_medio;
        $prospectos->inf_solicitada     = $request->inf_solicitada;
        $prospectos->paquete        = $request->paquete;
        $prospectos->num_personas   = $request->num_personas;
        $prospectos->env_info       = $request->env_informacion;
        $prospectos->recibir_info   = $request->recibir_info;
        $prospectos->alergia        = $request->alergia;
        $prospectos->a_que_alergico     = $request->a_que_alergico;
        $prospectos->enfermedad         = $request->enfermedad;
        $prospectos->otra_enfermedad  = $request->otra_enfermedad;
        $prospectos->comentarios    = $request->comentarios;
        $prospectos->updated_at;

        if($prospectos->save()){
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
    /**/
    public function destroy($id){
        $id = base64_decode($id);

        $response = [
            'status' => false,
            'message' => 'No se ha podido eliminar la noticia.'
        ];

        $data = Prospectos::find($id);

        if ($data->delete()) {
            $response = [
                'status' => true,
                'message' => 'Se ha eliminado con éxito el registro.',
                'url' => url('cms/dashboard/prospectos')
            ];
        }

        return response()->json($response);
    } 
}