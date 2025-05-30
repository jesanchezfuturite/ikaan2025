@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Información de Admisión
@stop

{{-- Content Title --}}
@section('contentTitle')
    Información de Admisión
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/cuestionario/admision') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    {{ Form::open(['url' => url('cms/dashboard/cuestionario/admision/store') ]) }}
                    	<div class="form-group row">
                            <label class="col-sm-1 col-form-label">Folio*</label>
                            <div class="col-sm-2">
                                {{ Form::hidden('folio', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-1 col-form-label">Nombre*</label>
                            <div class="col-sm-8">
                                {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fecha de entrada*</label>
                            <div class="col-sm-4">
                                {{ Form::date('fec_entrada', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Fecha de Salida*</label>
                            <div class="col-sm-4">
                                {{ Form::date('fec_salida', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Cumpleaños*</label>
                            <div class="col-sm-4">
                                {{ Form::date('fec_nac', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Correo electrónico*</label>
                            <div class="col-sm-4">
                                {{ Form::text('correo_elec', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefono*</label>
                            <div class="col-sm-4">
                                {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Celular*</label>
                            <div class="col-sm-4">
                                {{ Form::text('celular', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fecha de aniversario*</label>
                            <div class="col-sm-4">
                                {{ Form::date('fech_aniver', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Forma de pago*</label>
                            <div class="col-sm-4">
                            	<select name="forma_pago" class="form-control">
                            		<option value="">Elige una opción</option>
                            		<option value="Efectivo">Efectivo</option>
                            		<option value="Tarjeta">Tarjeta</option>
                            	</select>
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Servicio Solicitado*</label>
                            <div class="col-sm-4">
                                {{ Form::text('servicio_solic', null, ['class' => 'form-control']) }}
                            </div>


                            <label class="col-sm-2 col-form-label">Lugar asignado*</label>
                            <div class="col-sm-4">
                                {{ Form::text('lugar_asignado', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">                            
                            <label class="col-sm-2 col-form-label">Edad*</label>
                            <div class="col-sm-4">
                                <select name="edad" class="form-control">
                                    <option value="">Elige una opción</option>
                                    <option value="18-24">18-24</option>
                                    <option value="25-34">25-34</option>
                                    <option value="35-44">35-44</option>
                                    <option value="45-55">45-55</option>
                                    <option value="56-64">56-64</option>
                                    <option value="65+">65+</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Padece alguna enfermedad*</label>
                            <div class="col-sm-4">
                            	<select name="alguna_enfer" class="form-control" id="colorselector">
                            		<option value="">Elige una opción</option>
                            		<option value="ninguna">Ninguna</option>
                            		<option value="diabetes">Diabetes</option>
                            		<option value="cardiovascular">Cardiovascular</option>
                            		<option value="presion-arterial-baja">Presión arterial baja</option>
                            		<option value="presion-arterial-alta">Presión arterial alta</option>
                            		<option value="asma">Asma</option>
                            		<option value="otro">Otro</option>
                            	</select>
                            </div>
                        </div>
                        <!---->
                        <div class="output">
						  	<div id="otro" class="colors yellow">
		                    	<div class="form-group row">
		                            <label class="col-sm-2 col-form-label">Otra enfermedad*</label>
		                            <div class="col-sm-10">
		                                {{ Form::textarea('otra_enfermedad', null, ['class' => 'form-control']) }}
		                            </div>
		                        </div>
						  	</div>
						</div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tiene alguna alergia*</label>
                            <div class="col-sm-4">
                            	<select name="alergico" class="form-control" id="colorselector2">
                            		<option value="">Elige una opción</option>
                            		<option value="si">Si</option>
                            		<option value="no">No</option>
                            	</select>
                            </div>
                            <div class="col-sm-6">
		                        <div class="output">
								  	<div id="si" class="colors yellow">
				                    	<div class="form-group row">
				                            {{ Form::textarea('otro_alergia', null, ['class' => 'form-control', 'placeholder' => '¿A que es alérgico?']) }}
				                        </div>
								  	</div>
								</div>
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">¿Cómo se enteró de IKAAN?*</label>
                            <div class="col-sm-4">
                            	<select name="como_se_entero" class="form-control" id="como_se_entero">
                            		<option value="">Elige una opción</option>
                            		<option value="Facebook">Facebook</option>
                            		<option value="Instagram">Instagram</option>
                            		<option value="Página web">Página web</option>
                            		<option value="Recomendación">Recomendación</option>
                            		<option value="Otro">Otro medio</option>
                            	</select>
                            </div>
                            <div class="col-sm-6">
		                        <div class="output">
								  	<div id="Otro" class="colors yellow">
				                    	<div class="form-group row">
				                            {{ Form::textarea('otro_como_se_entero', null, ['class' => 'form-control', 'placeholder'=>'Otro medio']) }}
				                        </div>
								  	</div>
								</div>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-save"><i class="icofont icofont-save"></i> Guardar</button>
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
<script type="text/javascript">
	$(function() {
	  		$('#colorselector').change(function(){
	    	$('.colors').hide();
	    	$('#' + $(this).val()).show();
	  	});
	});
	$(function() {
	  		$('#colorselector2').change(function(){
	    	$('.colors').hide();
	    	$('#' + $(this).val()).show();
	  	});
	});
	$(function() {
	  		$('#como_se_entero').change(function(){
	    	$('.colors').hide();
	    	$('#' + $(this).val()).show();
	  	});
	});
</script>

    {{ Html::script('/back/js/dashboard/simpleForm.js')  }}
    {{ Html::script('/back/js/multi_dates_picker/jquery-ui.multidatespicker.js')  }}
    {{ Html::script('/back/js/dashboard/catalog/offers/create.js')  }}

@stop
