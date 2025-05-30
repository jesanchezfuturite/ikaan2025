@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Nuevo Producto
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Nuevo Producto
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    
    <a href="{{ url('cms/dashboard/catalogo/reservaciones') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
    @stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Formulario de alta para un nuevo producto</h5>
                    <span>Todos los campos son obligatorios</span>
                </div>

                <div class="card-block">
                    {{ Form::open(['url' => Config::get('app.base_url_admin').'/productos/store', 'files' => true]) }}
                    <div class="form-group row">
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Nombre</label>
	                        <div class="col-sm-12"> 
	                            {{ Form::text('nombre', $reserv->cli->nombre_completo,  ['class' => 'form-control','placeholder'=>'Nombre','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Email</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->cli->email,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Teléfono</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->cli->telefono,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Tipo de pago</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->tipo_pago,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Habitación reservada</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->habitacion->name,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Ofertas</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', null,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Número de Personas</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->numero_personas,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Total Pagado</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->tipo_pago,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    </div>
                    <!---Aqui-->
                    <div class="form-group row">
                    	<div class="col-sm-12">
                    		<label class="col-sm-12 col-form-label" style="text-align: center;color: #4a6076;font-size: 20px;font-weight: 700;">Días de reserva</label>
                    	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Entrada</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->fecha_entrada,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    	<div class="col-sm-6">
                    		<label class="col-sm-12 col-form-label">Salida</label>
	                        <div class="col-sm-12">
	                            {{ Form::text('email', $reserv->fecha_salida,  ['class' => 'form-control','placeholder'=>'Email','readonly'=>'readonly']) }}
	                        </div>
                    	</div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i> Guardar</button> <button type="reset" class="btn btn-danger"><i class="icofont icofont-trash"></i> Borrar</button>
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
@stop
