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
.container02 input {
  	position: absolute;
  	opacity: 0;
  	cursor: pointer;
  	height: 0;
  	width: 0;
}
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border: 2px solid;
}
.container02:hover input ~ .checkmark {
  	background-color: #ccc;
}
.container02 input:checked ~ .checkmark {
  	background-color: #2196F3;
}
.checkmark:after {
  	content: "";
  	position: absolute;
  	display: none;
}
.container02 input:checked ~ .checkmark:after {
  	display: block;
}
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
label{
  font-weight: 700;
}
</style>
@extends('back.layout.dashboard')
@section('pageTitle')
    Ver Estancia
@endsection

@section('contentTitle')
    Estancia
@stop

@section('pageTopButton')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<a href="{{ url('cms/dashboard/catalogo/reservaciones') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop
@section('mainContent')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Mostrará la información de la reserva con un formato de estancia.</h5>
                <span>Todos los campos son obligatorios</span>
            </div>

            <div class="card-block">
                {{ Form::open(['url' => url('cms/dashboard/catalogo/reservaciones/estancia/'.base64_encode($estancia->id)) ]) }}
                <div class="form-group row"> 
	                <div class="col-sm-12"> 
	                    <label class="col-sm-12 col-form-label">Servicio solicitado:</label>
		                <div class="col-sm-12"> 
		                    {{ Form::text('serv_solicitado', null,  ['class' => 'form-control','placeholder'=>'Servicio solicitado']) }}
		                </div>
	                </div>
                </div> 
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Fecha de entrada:</label>
                      <div class="col-sm-12"> 
                        {{ Form::date('fecha_entrada', $estancia->fecha_entrada,  ['class' => 'form-control','placeholder'=>'Fecha de entrada']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Fecha de salida:</label>
                      <div class="col-sm-12"> 
                        {{ Form::date('fecha_salida', $estancia->fecha_salida,  ['class' => 'form-control','placeholder'=>'Fecha de salida']) }}
                      </div>
                  </div>
                </div> 
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Nombre solicitante:</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('nom_solicitado', $estancia->cli->nombre_completo,  ['class' => 'form-control','placeholder'=>'Nombre solicitante']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Correo electrónico: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('correo', $estancia->cli->email,  ['class' => 'form-control','placeholder'=>'Correo electrónico']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Empresa: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('empresa', null,  ['class' => 'form-control','placeholder'=>'Empresa']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Dirección: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('direccion', null,  ['class' => 'form-control','placeholder'=>'Dirección']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">RFC: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('rfc', null,  ['class' => 'form-control','placeholder'=>'RFC']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Teléfono: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('telefono', $estancia->cli->telefono,  ['class' => 'form-control','placeholder'=>'Teléfono']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Celular: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('celular', $estancia->cli->celular,  ['class' => 'form-control','placeholder'=>'Celular']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Forma de pago: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('form_pago', null,  ['class' => 'form-control','placeholder'=>'Forma de pago']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Pago por Persona: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('pago_persona', null,  ['class' => 'form-control','placeholder'=>'Pago por Persona']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Total a Pagar: </label>
                      <div class="col-sm-12"> 
                        {{ Form::text('total_pagar', null,  ['class' => 'form-control','placeholder'=>'Total a Pagar']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-3"> 
                      <label class="col-sm-12 col-form-label">Anticipo:</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('anticipo', null,  ['class' => 'form-control','placeholder'=>'Anticipo']) }}
                      </div>
                  </div>
                  <div class="col-sm-3"> 
                      <label class="col-sm-12 col-form-label">Saldo:</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('saldo', null,  ['class' => 'form-control','placeholder'=>'Saldo']) }}
                      </div>
                  </div>
                  <div class="col-sm-3"> 
                      <label class="col-sm-12 col-form-label">Número de Personas:</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('num_persona', null,  ['class' => 'form-control','placeholder'=>'Número de Personas']) }}
                      </div>
                  </div>
                  <div class="col-sm-3"> 
                      <label class="col-sm-12 col-form-label">Total</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('total', null,  ['class' => 'form-control','placeholder'=>'Total']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-4"> 
                      <label class="col-sm-12 col-form-label">Instalaciones que van a usar:</label>
                      <div class="col-sm-12"> 
                        {{ Form::textarea('inst_usar', null,  ['class' => 'form-control','placeholder'=>'Instalaciones que van a usar']) }}
                      </div>
                  </div>
                  <div class="col-sm-4"> 
                      <label class="col-sm-12 col-form-label">Especificaciones del evento o servicio:</label>
                      <div class="col-sm-12"> 
                        {{ Form::textarea('esp_evento', null,  ['class' => 'form-control','placeholder'=>'Especificaciones del evento o servicio']) }}
                      </div>
                  </div>
                  <div class="col-sm-4"> 
                      <label class="col-sm-12 col-form-label">Servicios de SPA:</label>
                      <div class="col-sm-12"> 
                        {{ Form::textarea('serv_spa', null,  ['class' => 'form-control','placeholder'=>'Servicios de SPA']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Contacto de:</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('contacto_de', null,  ['class' => 'form-control','placeholder'=>'Contacto de']) }}
                      </div>
                  </div>
                  <div class="col-sm-6"> 
                      <label class="col-sm-12 col-form-label">Seguimiento y atendido por:</label>
                      <div class="col-sm-12"> 
                        {{ Form::text('seg_atendido', null,  ['class' => 'form-control','placeholder'=>'Seguimiento y atendido por']) }}
                      </div>
                  </div>
                </div>
                <!---->
                <div class="form-group row"> 
                  <div class="col-sm-4"> 
                      <label class="col-sm-12 col-form-label"></label>
                      <div class="col-sm-12"> 
                        <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Guardar</button> 

                      </div>
                  </div>
                </div>
                {{ Form::close() }}
                <!----------->
                <!--<div class="form-group row">
                    <div class="col-sm-2">
                      <div class="col-sm-12">
                          <a href="{{--URL::to('cms/dashboard/catalogo/reservaciones/descargar-estancia/'.base64_encode($estancia->id))--}}"><button type="submit" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Descargar</button> 
                          </a>
                        
                      </div>
                    </div>
                </div>--> 
            </div>
        </div>
    </div>
</div>
@stop
