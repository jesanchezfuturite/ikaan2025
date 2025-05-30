<style type="text/css">
.container02 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */ 
.container02 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border: 2px solid;
}

/* On mouse-over, add a grey background color */
.container02:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container02 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container02 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container02 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Ver Evaluación
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Ver Evaluación
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
                    <h5>Evaluación de la reservación mmmmmmmmmmmmmm</h5>
                    <span>Todos los campos son obligatorios</span>
                </div>

                <div class="card-block">
                    {{ Form::open(['url' => url('cms/dashboard/cuestionario/servicio/evaluacion') ]) }}
                    <div class="form-group row"> 
	                    <div class="col-sm-12"> 
	                    	<label class="col-sm-12 col-form-label">Nombre</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('nombre', null,  ['class' => 'form-control','placeholder'=>'Nombre']) }}
		                    </div>
	                	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Fecha Entrada</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('fecha_entrada',null,  ['class' => 'form-control','placeholder'=>'Fecha Entrada','readonly'=>'readonly']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Fecha Salida</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('fecha_salida',null,  ['class' => 'form-control','placeholder'=>'Fecha Salida','readonly'=>'readonly']) }}
		                    </div>
                    	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Correo electrónico</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('email',null,  ['class' => 'form-control','placeholder'=>'Correo electrónico','readonly'=>'readonly']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Teléfono</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('telefono',null,  ['class' => 'form-control','placeholder'=>'Teléfono','readonly'=>'readonly']) }}
		                    </div>
                    	</div>
                    </div>  
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Cel</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('celular',null,  ['class' => 'form-control','placeholder'=>'Cel','readonly'=>'readonly']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Servicio proporcionado</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('serv_proporcionado', null,  ['class' => 'form-control','placeholder'=>'Servicio proporcionado']) }}
		                    </div>
                    	</div>
                    </div>
                    <!---->
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="col-sm-12 col-form-label">Nombe del Paquete</label>
                            <div class="col-sm-12"> 
                                {{ Form::text('nom_paquete', null,  ['class' => 'form-control','placeholder'=>'Nombe del Paquete']) }}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="col-sm-12 col-form-label">Lugar Asignado</label>
                            <div class="col-sm-12"> 
                                {{ Form::text('lugar_asig', null,  ['class' => 'form-control','placeholder'=>'Servicio proporcionado']) }}
                            </div>
                        </div>
                    </div>
                    <!---Aqui-->
                    <div class="form-group row">
                    	<div class="col-sm-12">
                    		<label class="col-sm-12 col-form-label" style="text-align: center;color: #4a6076;font-size: 20px;font-weight: 700;">Instalaciones</label>
                    	</div>
                    </div>  
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Comodidad</label>
		                    <div class="col-sm-12"> 
								{{ Form::select('comodidad', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Limpieza</label>
		                    <div class="col-sm-12">
                                {{ Form::select('limpieza', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    </div>
                    <!---Aqui-->
                    <div class="form-group row">
                    	<div class="col-sm-12">
                    		<label class="col-sm-12 col-form-label" style="text-align: center;color: #4a6076;font-size: 20px;font-weight: 700;">Alimentos</label>
                    	</div>
                    </div>  
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Presentacion</label>
		                    <div class="col-sm-12"> 
                                {{ Form::select('presentacion', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Calidad</label>
		                    <div class="col-sm-12">
                                {{ Form::select('calidad', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    </div>
                    <!---Aqui-->
                    <div class="form-group row">
                    	<div class="col-sm-12">
                    		<label class="col-sm-12 col-form-label" style="text-align: center;color: #4a6076;font-size: 20px;font-weight: 700;">Personal</label>
                    	</div>
                    </div>  
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-4">
	                    	<label class="col-sm-12 col-form-label">Profesionalismo</label>
		                    <div class="col-sm-12"> 
                                {{ Form::select('profesionalismo', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-4">
	                    	<label class="col-sm-12 col-form-label">Actitud de servicio</label>
		                    <div class="col-sm-12">
                                {{ Form::select('actitud_servicio', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-4">
	                    	<label class="col-sm-12 col-form-label">Presentacion</label>
		                    <div class="col-sm-12">
                                {{ Form::select('presentacionP', ['Excelente' => "Excelente", "Bueno" => "Bueno", "Regular" => "Regular", "Malo" => "Malo", "Pesimo" => "Pésimo"] ,null, ['class' => 'form-control']) }}
		                    </div>
                    	</div>
                    </div>
                    <!---Aqui-->
                    <div class="form-group row">
                    	<div class="col-sm-12">
                    		<label class="col-sm-12 col-form-label" style="text-align: center;color: #4a6076;font-size: 20px;font-weight: 700;">Recomendados</label>
                    	</div>
                    </div>  
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Nombre</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::text('nombre_recomendado', null,  ['class' => 'form-control','placeholder'=>'Nombre']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Teléfono</label>
		                    <div class="col-sm-12">
		                        {{ Form::text('telefono_recomendado', null,  ['class' => 'form-control','placeholder'=>'Teléfono']) }}
		                    </div>
                    	</div>
                    </div> 
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Correo</label>
		                    <div class="col-sm-12">
		                        {{ Form::text('correo_recomendado', null,  ['class' => 'form-control','placeholder'=>'Correo']) }}
		                    </div>
                    	</div>
                    	<div class="col-sm-6">
	                    	<label class="col-sm-12 col-form-label">Facebook</label>
		                    <div class="col-sm-12">
		                        {{ Form::text('facebook_recomendado', null,  ['class' => 'form-control','placeholder'=>'Facebook']) }}
		                    </div>
                    	</div>
                    </div>
                    <!---->
                    <div class="form-group row">
                    	<div class="col-sm-12">
	                    	<label class="col-sm-12 col-form-label">Observaciones</label>
		                    <div class="col-sm-12"> 
		                        {{ Form::textarea('observacion', null,  ['class' => 'form-control','placeholder'=>'Observaciones']) }}
		                    </div>
	                	</div>
                    </div> 
                    <div class="form-group row">
                    	<label class="col-sm-12 col-form-label"></label>
	                    <div class="col-sm-12"> 
	                        <label class="container02">Le gustaria recibir información 
							  	<input type="checkbox" name="mas_info">
							  	<span class="checkmark"></span>
							</label>
                    	</div> 
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label"></label>
                        <div class="col-sm-12"> 
                            <p class="container02">
                                Su información será confidencial y solo para uso interno.<br>
                                En caso de calificar cualquier concepto de "Regular" o inferior, le agradeceríamos sus comentarios en el área de "Observaciones".
                            </p>
                        </div> 
                    </div> 
                    <!---->
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
