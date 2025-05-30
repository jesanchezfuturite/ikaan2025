@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Evaluación de servicio
@stop

{{-- Content Title --}}
@section('contentTitle')
    Evaluación de servicio
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/ofertas') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    {{ Form::open(['url' => url('cms/dashboard/cuestionario/servicio/store') ]) }}
                    	<div class="form-group row">
                            <label class="col-sm-1 col-form-label">Folio*</label>
                            <div class="col-sm-2">
                                {{ Form::text('folio', null, ['class' => 'form-control']) }}
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
                            <label class="col-sm-2 col-form-label">Correo electrónico*</label>
                            <div class="col-sm-4">
                                {{ Form::text('correo_elec', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Telefono*</label>
                            <div class="col-sm-4">
                                {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Celular*</label>
                            <div class="col-sm-4">
                                {{ Form::text('celular', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Servicio proporcionado*</label>
                            <div class="col-sm-4">
                                {{ Form::text('serv_proporcionado', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Instalaciones:</label>
                    	</div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comodidad*</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="comodidad">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Limpieza</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="limpieza">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Alimentos:</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Presentación*</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="presentacion">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Calidad</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="calidad">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Personal:</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profesionalismo*</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="per_profesionalismo">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Actitud de servicio</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="act_servicio">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Presentación</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="per_presentacion">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Pésimo">Pésimo</option>
                                </select>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Observaciones</label>
                            <div class="col-sm-10">
                                {{ Form::textarea('observaciones', null, ['class' => 'form-control']) }}
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
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')  }}
    {{ Html::script('/back/js/dashboard/simpleForm.js')  }}
    {{ Html::script('/back/js/multi_dates_picker/jquery-ui.multidatespicker.js')  }}
    {{ Html::script('/back/js/dashboard/catalog/offers/create.js')  }}
@stop
