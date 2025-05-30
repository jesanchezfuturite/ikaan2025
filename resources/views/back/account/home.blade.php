@extends('back.layout.account')

{{-- Page Title --}}
@section('pageTitle')
    Inicio de sesión
@stop

{{-- Main Content --}}
@section('mainContent')
    {{ Form::open(['route' => 'admin_login', 'class' => 'md-float-material']) }}
    <div class="auth-box" style="background-color: #89abade8;">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ url('back/assets/images/logo_ikaan.png') }}" style="width: 80%; margin: 0 10%;" />
                {{--<h3 class="text-left txt-primary" style="color: white !important;">Inicio de sesión</h3>--}}
            </div>
        </div>
        <hr />


        @if ($errors->any())
            <div class="alert alert-danger icons-alert text-left">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif( Session::has('loginError') )
            <div class="alert alert-danger icons-alert text-left">
                <ul>
                    <li>{{ Session::get('loginMsg') }}</li>
                </ul>
            </div>
        @endif

        <div class="input-group">
            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Tu cuenta de correo']) }}
            <span class="md-line"></span>
        </div>

        <div class="input-group">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Tu contraseña']) }}
            <span class="md-line"></span>
        </div>

        <div class="row m-t-25 text-left">
            <div class="col-sm-12 col-xs-12 forgot-phone text-right">

            </div>
        </div>

        <div class="row m-t-30">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" style="background: white !important; color: #424242 !important; border-color: white;">Inicio de sesión</button>
            </div>
        </div>

        <hr />
        <div class="row">
            <div class="col-md-10">
                <p class="text-inverse text-left m-b-0" style="color: white !important;">Desarrollador por</p>
                <p class="text-inverse text-left" style="color: white !important;"><b>Metodika TI</b></p>
            </div>
        </div>
    </div>
    {{ Form::close()  }}
@stop