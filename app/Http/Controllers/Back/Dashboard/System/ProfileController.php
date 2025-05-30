<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\System;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Library\Pastora;
use MetodikaTI\Library\URI;
use MetodikaTI\Permission;
use MetodikaTI\SystemModule;
use MetodikaTI\UserProfile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserProfile::where('id', '!=', 1)->get();
        return view('back.dashboard.system.profile.home', array(
            'data' => $data,
            'permitions' => URI::checkPermitions(),
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.dashboard.system.profile.create', array('modules' => Pastora::moduleTree()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = array(
            'status' => true,
            'message' => 'Se ha guardado con éxito el nuevo perfil.',
            'url' => route('profile_index'),
        );

        $json = $this->jsonPermits($request->module);

        $profile = new UserProfile();
        $profile->name = $request->nombre;
        $profile->permits = $json;
        $profile->save();

        return response()->json($response);

    }

    /** This method get the right json for each user's permits
     * @param $modules modules with the permits checkeds
     * @return string return a json with all permise for the profile
     */
    private function jsonPermits($modules) {
        $permissions = Permission::all();
        $json = array();

        foreach (array_keys($modules) as $key => $value) {

            $json[$value] = 0;

            foreach ($modules[$value] as $clave => $valor) {
                foreach ($permissions as $permission) {
                    if($permission->name == $valor) {
                        $json[$value] = $json[$value] + $permission->bit;
                    }
                }
            }

            //Se revisa si tiene papa el modulo
            $parent = SystemModule::where('id', '=', $value)->where('parent', '<>', 0);
            if ($parent->count() > 0) {
                $parent = $parent->first();
                if (!array_key_exists($parent->parent, $json)) {
                    $json[$value] = 15;
                }
            }

        }

        return json_encode($json);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = base64_decode($id);
        $modules = Pastora::moduleTree();
        return view('back.dashboard.system.profile.view', compact('id', 'modules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);
        $modules = Pastora::moduleTree();
        return view('back.dashboard.system.profile.update', compact('id', 'modules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $response = [
            'status' => true,
            'message' => 'Se ha guardado con éxito el nuevo perfil.',
            'url' => route('profile_index'),
        ];

        $json = $this->jsonPermits($request->module);

        $data = UserProfile::find($request->id);
        if ($data != null) {
            $data->name = $request->nombre;
            $data->permits = $json;
            if (!$data->save()) {
                $response['estatus'] = false;
                $response['message'] = 'No se pudo actualizar el perfil';
            }
        } else {
            $response['estatus'] = false;
            $response['message'] = 'No se encontrol el perfil';
        }

        return response()->json($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $response = array(
            'status' => true,
            'message' => 'El perfil ha sido eliminado correctamente.',
            'url' => route('profile_index'),
        );

        $profile = UserProfile::find(base64_decode($id));
        if($profile != null) {
            if(!$profile->delete()) {
                $response = [
                    'message' => 'El perfil no se encuentra dado de alta en el sistema.',
                    'status' => false
                ];
            }
        } else {
            $response = [
                'message' => 'El perfil no se encuentra dado de alta en el sistema.',
                'status' => false
            ];
        }

        return response()->json($response);
    }

    public function getData(Request $request)
    {
        $data = UserProfile::find($request->id);
        return response()->json($data);
    }
}
