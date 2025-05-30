<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Catalog;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Admision\CreateAdmisionRequest;
use MetodikaTI\Http\Requests\Back\Admision\CreateServicioRequest;
use MetodikaTI\Admision;
use MetodikaTI\Lealtad;

class LealtadController extends Controller
{
    public function index(){
    	$lealtad = Lealtad::get();
        return view('back.dashboard.catalog.lealtad.index', array('lealtad'=>$lealtad));
    }

    public function create(){
        return view('back.dashboard.catalog.lealtad.create');
    }

    public function store(Request $request){
    	$response = [
            'status' => false,
            'message' => 'No se ha podido crear el registro'
        ];
        DB::beginTransaction();
        $data = new Lealtad();
        $data->categoria        = $request->lealtad;

        $data->created_at;        
        if($data->save()){
       		DB::commit();
            $response = [
                'status' => true,
                'message' => 'Se ha creado el registro con exito.',
                'url' => url("cms/dashboard/catalogo/lealtad/")
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






}