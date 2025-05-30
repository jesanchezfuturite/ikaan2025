@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Edición usuario
@stop

{{-- Content Title --}}
@section('contentTitle')
    Edición usuario
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ route('user_index') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Formulario de edición usuario</h5>
                </div>

                <div class="card-block">
                    <h4 class="sub-title">Todos los campos son obligatorios.</h4>

                    {{ Form::open(['route' => array('user_update', base64_encode($user->id))]) }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre</label>

                        <div class="col-sm-10">
                            {{ Form::text('nombre', ucwords($user->name), ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>

                        <div class="col-sm-10">
                            {{ Form::email('email', $user->email, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Perfil de Usuario</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="perfil">
                                <option value="">Seleccione un perfil de usuario</option>
                                @foreach($profiles as $profile)
                                    @if($user->user_profile_id == $profile->id)
                                        <option value="{{ $profile->id }}" selected> {{ $profile->name }}</option>
                                    @else
                                        <option value="{{ $profile->id }}"> {{ $profile->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Contraseña</label>

                        <div class="col-sm-10">
                            {{ Form::password('password', ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Confirmar Contraseña</label>

                        <div class="col-sm-10">
                            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i> Guardar</button>
                            <button type="reset" class="btn btn-danger"><i class="icofont icofont-refresh"></i> Limpiar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('/back/js/dashboard/simpleForm.js')  }}
@stop
