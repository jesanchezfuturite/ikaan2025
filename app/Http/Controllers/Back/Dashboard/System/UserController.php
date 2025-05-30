<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\System;

use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\System\User\CreateRequest;
use MetodikaTI\Http\Requests\Back\System\User\EditRequest;
use MetodikaTI\Library\URI;
use MetodikaTI\User;
use MetodikaTI\UserProfile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('id', '!=', 1)->get();

        return view('back.dashboard.system.user.index', array(
                'data'=>$data, 'permitions' => URI::checkPermitions(),
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = UserProfile::where('id', '!=', 1)->get();
        return view('back.dashboard.system.user.create', array('profiles'=>$profiles));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $response = array('status' => false);

        $user = new User();
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_profile_id =  $request->perfil;

        if($user->save()) {
            $response['status'] = true;
            $response["message"] = "El usuario se ha registrador correctamente.";
            $response['url'] = route('user_index');
        }

        return response()->json($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(base64_decode($id));
        if ($user != null) {
            $profiles = UserProfile::where('id', '!=', 1)->get();
            return view('back.dashboard.system.user.edit', ['user' => $user, 'profiles' => $profiles]);
        } else {
            return redirect()->route('user_index');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $response = array('status'=>false);
        $user = User::find(base64_decode($id));
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->user_profile_id = $request->perfil;

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($user->save()) {
            $response = [
                'status' => true,
                'url' => route('user_index'),
                'message' => "Se ha editado el usuario correctamente."
            ];
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
            'message' => 'El usuario ha sido eliminado correctamente.',
            'url' => route('user_index'),
        );

        $profile = User::find(base64_decode($id));
        if($profile != null) {
            if(!$profile->delete()) {
                $response = [
                    'message' => 'El usuario no se encuentra dado de alta en el sistema.',
                    'status' => false
                ];
            }
        } else {
            $response = [
                'message' => 'El usuario no se encuentra dado de alta en el sistema.',
                'status' => false
            ];
        }

        return response()->json($response);
    }
}
