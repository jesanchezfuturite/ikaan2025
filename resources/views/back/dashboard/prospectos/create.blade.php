@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Alta de Prospectos
@stop

{{-- Content Title --}}
@section('contentTitle')
    Alta de Prospectos
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
                    {{ Form::open(['url' => url('cms/dashboard/prospectos/store') ]) }}
                        <!---->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-4">
                                {{ Form::text('prospecto', null, ['class' => 'form-control', 'placeholder'=>'Nombre Completo']) }}
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
                                {{ Form::date('fech_cumple', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Fecha de aniversario</label>
                            <div class="col-sm-4">
                                {{ Form::date('fech_aniv', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Edad</label>
                            <div class="col-sm-1">
                                {{ Form::number('edad', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-1 col-form-label">Correo*</label>
                            <div class="col-sm-3">
                                {{ Form::text('correo', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Teléfono*</label>
                            <div class="col-sm-3">
                                {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Medio por el cual nos contactó</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="medio">
                                    <option value="Facebook">Facebook</option>
                                    <option value="Bueno">Bueno</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Otro medio</label>
                            <div class="col-sm-4">
                                {{ Form::text('otro_medio', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Información Solicitada</label>
                            <div class="col-sm-3">
                                {{ Form::text('inf_solicitada', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-1 col-form-label">Paquete</label>
                            <div class="col-sm-2">
                                {{ Form::text('paquete', null, ['class' => 'form-control']) }}
                            </div>
                            <label class="col-sm-2 col-form-label">Número de Personas</label>
                            <div class="col-sm-2">
                                {{ Form::number('num_personas', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Enviar Información</label>
                            <div class="col-sm-1">
                                <input type="checkbox" name="env_informacion" value="1">Si
                                <input type="checkbox" name="env_informacion" value="0">No
                            </div>
                            <label class="col-sm-2 col-form-label">Quiere recibir info</label>
                            <div class="col-sm-1">
                                <input type="checkbox" name="recibir_info">Si
                                <input type="checkbox" name="recibir_info">No
                            </div>
                            <label class="col-sm-2 col-form-label">Cómo se enteró de IKAAN</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="medio_ikaan">
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
                                <select class="form-control" name="alergia" onChange="pagoOnChange(this)">
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
    
                            </div>
                            <label class="col-sm-2 col-form-label" id="nTargetaLabel" style="display:;">¿A que es alérgico?</label>
                            <div class="col-sm-4" id="nTargeta" style="display:;">
                                {{ Form::text('a_que_alergico', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Enfermedad </label>
                            <div class="col-sm-4">
                                <select class="form-control" name="enfermedad"  onChange="pagoOnChangeDos(this)">
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
                            <label class="col-sm-2 col-form-label" id="otraEnfermedadLabel" style="display:;">Otra enfermedad</label>
                            <div class="col-sm-4 otraEnfermedad" id="otraEnfermedad" style="display:;">
                                {{ Form::text('otra_enfermedad', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <!---->
                    	<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comentarios  </label>
                            <div class="col-sm-10">
                                {{ Form::textarea('comentarios', null, ['class' => 'form-control']) }}
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

<script type="text/javascript">
function pagoOnChange(sel) {
    if (sel.value=="0"){
        $("#nTargetaLabel").hide()
        $("#nTargeta").hide();
    }else {
        $("#nTargetaLabel").show()
        $("#nTargeta").show();
    }
}
/**/
function pagoOnChangeDos(sel) {
    if (sel.value=="Ninguna"){
        $("#otraEnfermedad").hide()
        $("#otraEnfermedadLabel").hide()
    }else if(sel.value=="Otra"){
        $("#otraEnfermedad").show()
        $("#otraEnfermedadLabel").show()
    }else {
        $("#otraEnfermedad").hide()
        $("#otraEnfermedadLabel").hide();
    }
}
</script>
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')  }}
    {{-- Html::script('/back/js/dashboard/simpleForm.js')  --}}
    {{ Html::script('/back/js/multi_dates_picker/jquery-ui.multidatespicker.js')  }}
    {{-- Html::script('/back/js/dashboard/catalog/offers/create.js')  --}}
@stop
