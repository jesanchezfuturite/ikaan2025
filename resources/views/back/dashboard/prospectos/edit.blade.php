@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Editar Prospectos
@stop

{{-- Content Title --}}
@section('contentTitle')
    Editar Prospectos
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/prospectos/') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                	{{ Form::open(['url' => url('cms/dashboard/prospectos/update/'.$prospectos->id) ]) }}
                        <!---->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-4">
                                {{ Form::text('prospecto', $prospectos->prospecto, ['class' => 'form-control', 'placeholder'=>'Nombre Completo']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Lealtad</label>
                            <div class="col-sm-4"> 
                                <select class="form-control" name="lealtad">
                                    @foreach($lealtad as $lealtad)
                                        <option value="{{$lealtad->id}}">{{$lealtad->categoria}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-------------------------->
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fecha de cumpleaños</label>
                            <div class="col-sm-4">
                                {{ Form::date('fech_cumple', $prospectos->fech_cumple, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Fecha de aniversario</label>
                            <div class="col-sm-4">
                                {{ Form::date('fech_aniv', $prospectos->fech_aniv, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Edad</label>
                            <div class="col-sm-1">
                                {{ Form::number('edad',$prospectos->edad, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-1 col-form-label">Correo*</label>
                            <div class="col-sm-3">
                                {{ Form::text('correo',$prospectos->correo, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Teléfono*</label>
                            <div class="col-sm-3">
                                {{ Form::text('telefono',$prospectos->telefono, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Medio por el cual nos contactó</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="medio">
                                	<option value="{{$prospectos->medio}}">{{$prospectos->medio}}</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Pagina-web">Página web</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Recomendación">Recomendación</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Otro medio</label>
                            <div class="col-sm-4">
                                {{ Form::text('otro_medio',$prospectos->otro_medio, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Información Solicitada</label>
                            <div class="col-sm-3">
                                {{ Form::text('inf_solicitada',$prospectos->inf_solicitada, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-1 col-form-label">Paquete</label>
                            <div class="col-sm-2">
                                {{ Form::text('paquete', $prospectos->paquete, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Número de Personas</label>
                            <div class="col-sm-2">
                                {{ Form::number('num_personas', $prospectos->num_personas, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Enviar Información</label>
                            <div class="col-sm-1">
                            	<?php if ($prospectos->env_info == 1) { ?>
                            			<input type="checkbox" name="env_informacion" checked="" value="1">Si
                            			<input type="checkbox" name="env_informacion" value="0">No
                            		<?php } else{ ?>
                            			<input type="checkbox" name="env_informacion" value="1">Si
                            			<input type="checkbox" name="env_informacion" checked="" value="0">No
                            		<?php } ?>
                            </div>
                            <label class="col-sm-2 col-form-label">Quiere recibir info</label>
                            <div class="col-sm-1">
                            	<?php if ($prospectos->recibir_info == 1) { ?>
                            			<input type="checkbox" name="recibir_info" checked="" value="1">Si
                            			<input type="checkbox" name="recibir_info" value="0">No
                            		<?php } else{ ?>
                            			<input type="checkbox" name="recibir_info" value="1">Si
                            			<input type="checkbox" name="recibir_info" checked="" value="0">No
                            		<?php } ?>
                            </div>
                            <label class="col-sm-2 col-form-label">Cómo se enteró de IKAAN</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="medio_ikaan">
                                	<option value="{{$prospectos->medio_ikaan}}">{{$prospectos->medio_ikaan}}</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Pagina-web">Página web</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Recomendación">Recomendación</option>
                                </select>
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alergia </label>
                            <div class="col-sm-4">
                            	<?php if ($prospectos->alergia == 1) {?>
	                                <select class="form-control" name="alergia">
	                                    <option value="Si">Si</option>
	                                    <option value="No">No</option>
	                                </select>
                            	<?php } else { ?>
	                                <select class="form-control" name="alergia">
	                                    <option value="No">No</option>
	                                    <option value="Si">Si</option>
	                                </select>
                            	<?php } ?>
                            </div>
                            <label class="col-sm-2 col-form-label">¿A que es alérgico?</label>
                            <div class="col-sm-4">
                                {{ Form::text('a_que_alergico',$prospectos->a_que_alergico, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Enfermedad </label>
                            <div class="col-sm-4">
                                <select class="form-control" name="enfermedad">>
                                    <option value="">Elige una opción</option>
                                    <option value="Ninguna">Ninguna</option>
                                    <option value="Diabetes">Diabetes</option>
                                    <option value="Cardiovascular">Cardiovascular</option>
                                    <option value="Presion-Arterial-Baja">Presión Arterial Baja</option>
                                    <option value="Presión-Arterial-Alta">Presión Arterial Alta</option>
                                    <option value="Asma">Asma</option>
                                    <option value="Otra">Otra</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Otra enfermedad</label>
                            <div class="col-sm-4">
                                {{ Form::text('otra_enfermedad', $prospectos->otra_enfermedad, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comentarios  </label>
                            <div class="col-sm-10">
                                {{ Form::textarea('comentarios', $prospectos->comentarios, ['class' => 'form-control']) }}
                            </div>
                        </div>
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

</script>
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')  }}
    {{-- Html::script('/back/js/dashboard/simpleForm.js')  --}}
    {{ Html::script('/back/js/multi_dates_picker/jquery-ui.multidatespicker.js')  }}
    {{-- Html::script('/back/js/dashboard/catalog/offers/create.js')  --}}
@stop
