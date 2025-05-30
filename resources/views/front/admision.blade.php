@extends('layouts.front.master') 

@section('title', 'Elige tu fecha')

@section('content')

@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.css') }}">
    <style type="text/css">
    	.topAdmisionT{
    		padding-bottom: 20px;
    	}
    	.topAdmisionT_delBton{
    		text-align: center;
    		padding-bottom: 20px;
    	}
    	.formulario_de_admision .col-sm-6, .formulario_de_admision .col-sm-12{
		    position: relative;
		    min-height: 1px;
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.formulario_de_admision .form-control {
		    height: 40px;
		}
		.formulario_de_admision .enviarAdmision_btn{
			text-align: center;
			background: #89acaf;
			padding: 10px;
			margin: auto;
			color: #fff;
			border: 0px;
			font-size: 18px;
		} 
    </style> 
@stop 
<div class="formulario_de_admision">
	<div class="container">
		<form class="table_alimentos" action="{{ url('editarEval') }}" id="" METHOD="POST"> 


		<div class="col-sm-12 topAdmisionT">
			<p style="padding-top: 150px;color: #89acaf; text-align: center; font-size: 30px;font-weight: 700;">
				Formulario de Admisión para el cliente
			</p> 
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-12">
				<label>Nombre Completo:</label>
				{{ Form::text('nombre', $admision->cli->nombre_completo,  ['class' => 'form-control','placeholder'=>'Nombre','readonly'=>'readonly' ]) }}
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>Fecha Entrada:</label>
				{{ Form::date('fecha_entrada',$admision->fecha_entrada,  ['class' => 'form-control','placeholder'=>'Fecha Entrada','readonly'=>'readonly']) }}
			</div>
			<div class="col-sm-6">
				<label>Fecha Salida:</label>
				{{ Form::date('fecha_salida',$admision->fecha_salida,  ['class' => 'form-control','placeholder'=>'Fecha Salida','readonly'=>'readonly']) }}
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>Correo electrónico:*</label>
				{{ Form::text('email',null,  ['class' => 'form-control','placeholder'=>'Correo electrónico' ,'required'=>'required']) }}
			</div>
			<div class="col-sm-6">
				<label>Fecha de cumpleaños:*</label>
				{{ Form::date('cumple',null,  ['class' => 'form-control','placeholder'=>'Fecha de cumpleaños' ,'required'=>'required']) }}
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>Número de Teléfono:*</label>
				{{ Form::number('telefono',null,  ['class' => 'form-control','placeholder'=>'Teléfono' ,'required'=>'required']) }}
			</div>
			<div class="col-sm-6">
				<label>Número de Celular:*</label>
				{{ Form::number('celular', null,  ['class' => 'form-control','placeholder'=>'Cel' ,'required'=>'required']) }}
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>Fecha de aniversario:*</label>
				{{ Form::date('aniversario',null,  ['class' => 'form-control','placeholder'=>'Fecha de aniversario' ,'required'=>'required']) }}
			</div>
			<div class="col-sm-6">
				<label>Forma de pago:*</label>
				<select class="form-control" name="forma_pago" required="">
					<option>Elige una opción</option>
					<option>Efectivo</option>
					<option>Depósito</option>
					<option>Transferencia</option>
					<option>Tarjeta de crédito</option>
				</select>
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>Lugar asignado:*</label>
				{{ Form::text('lugar',null,  ['class' => 'form-control','placeholder'=>'Lugar asignado' ,'required'=>'required']) }}
			</div>
			<div class="col-sm-6">
				<label>Edad:*</label>
				{{ Form::number('edad',null,  ['class' => 'form-control','placeholder'=>'Edad' ,'required'=>'required']) }}
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>Servicio solicitado:*</label>
				{{ Form::text('serv_solicitado', null,  ['class' => 'form-control','placeholder'=>'Servicio solicitado' ,'required'=>'required']) }}
			</div>
			<div class="col-sm-6">
				<label>Padece alguna enfermedad:*</label>
				{{ Form::text('enfermedad', null,  ['class' => 'form-control','placeholder'=>'Enfermedad' ,'required'=>'required']) }}
			</div>
		</div>
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>¿Tienes alguna alergia? *</label>
				<select class="form-control" name="alergias" required="">
					<option>Elige una opción</option>
					<option>SI</option>
					<option>NO</option>
				</select>
			</div>
			<div class="col-sm-6">
				<label>¿A que es alergico?</label>
				 {{ Form::text('aque_alergias',null,  ['class' => 'form-control','placeholder'=>'¿A que es alergico?']) }}
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT">
			<div class="col-sm-6">
				<label>¿Como se entero de IKAAN? *</label>
				<select id="status" name="redes_sociales" onChange="mostrar(this.value);" class="form-control" required>
					<option value="facebook">FACEBOOK</option>
					<option value="instagram">INSTAGRAM</option>
					<option value="pagina-web">PÁGINA WEB</option>
					<option value="recomendacion">RECOMENDACIÓN</option>
					<option value="otro">OTRO</option>
				</select>
			</div>
			<div class="col-sm-6">
		        <div id="otro"  style="display: none;">
			        <label class="col-sm-12 col-form-label">Otro</label>
				    <div class="col-sm-12"> 
				        {{ Form::text('otro',null,  ['class' => 'form-control','placeholder'=>'¿Como se entero de IKAAN?']) }}
				    </div>
				</div>
			</div>
		</div>
		<!----->
		<div class="col-sm-12 topAdmisionT_delBton">
			<div class="col-sm-12">
				<input type="submit" value="Enviar formulario de Admisión" class="enviarAdmision_btn">
			</div>
		</div>
        {{ Form::close() }} 
	</div>
</div>
@section('pageSCRIPTS')
    <script src="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.js') }}"></script>
    <script src="{{ url('assets/js/front/home.js') }}"></script>
    <script src="{{ url('assets/js/front/platillos.js') }}"></script>
@stop

@stop