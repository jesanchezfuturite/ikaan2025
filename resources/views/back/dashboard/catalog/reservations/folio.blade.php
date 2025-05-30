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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Folio
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Folio
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{ url('cms/dashboard/catalogo/reservaciones') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
    <style type="text/css">
    .input_folio_css {
        width: 70%;
        padding: 5px;
        border-bottom: 1px solid #000 !important;
        border: 1px solid #fff;
        color: #464a4c;
        font-size: 14px;
    }
.input_folio_css_cuadardo {
    width: 30%;
    padding: 5px;
    border: 1px solid black;
    color: #464a4c;
    font-size: 14px;
}
        .estiloBord_linea{
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            font-size: 15px;
        }
        .listaBaDatos_texto{
            font-weight: 700;
        }
        .labelWidht01{
            width: 22%; 
        }
    </style>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Muestra la información de la reserva con un formato de folio de venta.</h5>
                    <span>Todos los campos son obligatorios</span>
                </div>

                <div class="card-block">
                    {{ Form::open(['url' => url('cms/dashboard/catalogo/reservaciones/editarEval/'.base64_encode($folio->id)) ]) }}
                    <!---->
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="labelWidht01">Nombre del Cliente: </label>
                            <input type="" name="nombre_cliente" class="input_folio_css" value="{{$folio->cli->nombre_completo}}">
                        </div>
                        <!---->
                        <div class="col-sm-6">
                            <label class="labelWidht01">Número de Folio # </label>
                            <input type="" name="folio" class="input_folio_css_cuadardo" value="{{$folio->id}}">
                        </div>
                    </div> 
                    <!---------------------------------------------------->
                    <div class="form-group row">
                        <div class="col-sm-6">
                        </div>
                        <!---->
                        <div class="col-sm-6">
                            <label class="labelWidht01">Cantidad de Personas</label>
                            <input type="" name="num_personas" class="input_folio_css_cuadardo" value="{{$folio->numero_personas}}">
                        </div>
                    </div>  
                    <!---------------------------------------------------->
                    <div class="form-group row">
                        <div class="col-sm-6">
                        </div>
                        <!---->
                        <div class="col-sm-6">
                            <label class="labelWidht01">Tipo de habitación</label>
                            <input type="" name="tipo_habitacion" class="input_folio_css_cuadardo" value="{{$folio->habitacion->name}}">
                        </div>
                    </div> 
                    <!---------------------------------------------------->
                    <div class="form-group row">
                        <div class="col-sm-6">
                        </div>
                        <!---->
                        <div class="col-sm-6">
                            <label class="labelWidht01">Paquetes</label>
                            <input type="" name="paquetes" class="input_folio_css_cuadardo" value="Paquetes">
                        </div>
                    </div>   
                    <!---------------------------------------------------->
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="labelWidht01">Teléfono</label>
                            <input type="" name="telefono" class="input_folio_css" value="{{$folio->cli->telefono}}">
                        </div>
                        <!---->
                        <div class="col-sm-6">
                            <label class="labelWidht01">Promoción</label>
                            <input type="" name="promocion" class="input_folio_css_cuadardo" value="{{$folio->descount_promotion}}">
                        </div>
                    </div>  
                    <!---------------------------------------------------->
                    <br><br>
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label class="labelWidht01">Email</label>
                            <input type="" name="email" class="input_folio_css" value="{{$folio->cli->email}}">
                        </div>
                        <!---->
                        <div class="col-sm-6">
                            <label class="labelWidht01">Observaciones</label>
                            <textarea name="observaciones" class="input_folio_css"  placeholder="Deja tu Observaciones"></textarea>
                        </div>
                    </div> 
                    <!---------------------------------------------------->
                    <br><br>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label class="labelWidht01">Check-in</label>
                            <input type="date" name="check_in" class="input_folio_css" value="{{$folio->fecha_entrada}}">
                        </div>
                        <!---->
                        <div class="col-sm-4">
                            <label class="labelWidht01">Check-out</label>
                            <input type="date" name="check_out" class="input_folio_css" value="{{$folio->fecha_salida}}">
                        </div>
                        <!---->
                        <div class="col-sm-4">
                            <label class="labelWidht01">Hora llegada</label>
                            <input type="" name="hora_llegada" class="input_folio_css" value="09:00 am">
                        </div>
                    </div> 
                    <!---------------------------------------------------->
                    <br><br>
                    <div class="form-group row">
                        <div class="col-sm-5" style="padding-left: 5%;">
                            <!--<p> <input class="w3-check" type="checkbox" name="deposito"><label> Copia de deposito</label></p> 
                            <p> <input class="w3-check" type="checkbox" name="maca"><label> Depósito Maca</label></p>
                            <p> <input class="w3-check" type="checkbox" name="menu"><label> Enviar Menus</label></p>
                            <p> <input class="w3-check" type="checkbox" name="recibir_menu"><label> Recibir Menus</label></p>-->
                            <p> <input class="w3-check" type="checkbox" name="especificaciones"><label> Ficha de Especificaciones</label></p>
                            <!--<p> <input class="w3-check" type="checkbox" name="espe_vero"><label> Enviar Especificaciones a Vero</label></p>
                            <p> <input class="w3-check" type="checkbox" name="espe_martin"><label> Enviar Especificaciones a Martín</label></p>
                            <p> <input class="w3-check" type="checkbox" name="ctrol_ingresos"><label> Control de Ingresos</label></p>
                            <p> <input class="w3-check" type="checkbox" name="agradecimientos"><label> Carta de Agradecimientos</label></p>-->
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <label class="labelWidht01">Costo por personas</label>
                                <input type="" name="costo_persona" class="input_folio_css_cuadardo" value="{{$folio->costo_por_persona}}" readonly>
                            </div>
                            <!---->
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <label class="labelWidht01">Número de personas</label>
                            <input type="" name="num_personas" class="input_folio_css_cuadardo" value="{{$folio->numero_personas}}" readonly>
                            </div>
                            <!---->
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <?php 
                                $xpersona = $folio->costo_por_persona;
                                $totPersona = $folio->numero_personas;
                                $iva = $folio->iva;
                                $subtotal = $xpersona * $totPersona;
                                $total_x_persona = $subtotal + $iva;
                                ?>
                                <label class="labelWidht01">Total + IVA</label>
                                <input type="" name="total" class="input_folio_css_cuadardo" id=uno value="<?php echo $total_x_persona;?>">
                            </div>
                            <!---->
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <label class="labelWidht01">Anticipo</label>
                                <?php 
                                $estatus = $folio->payment_status;
                                if ($estatus == "paid") {?>
                                    <input type="" name="anticipo" class="input_folio_css_cuadardo" id=dos  value="<?php echo $total_x_persona;?>">
                                <?php }else{ ?>
                                    <input type="" name="anticipo" class="input_folio_css_cuadardo" id=dos  required="">
                                <?php }
                                ?>
                            </div>
                            <!---->
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <label class="labelWidht01">Saldos</label>
                                <input type="" name="saldos" class="input_folio_css_cuadardo" id=tres readonly>
                            </div>
                            <!---->
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <label class="labelWidht01">Extras</label>
                                <input type="" name="extras" class="input_folio_css_cuadardo" id=cinco required>
                            </div>
                            <!---->
                            <div class="col-sm-12" style="padding-bottom: 35px;">
                                <label class="labelWidht01">Total</label>
                                <input type="" name="total_num" class="input_folio_css_cuadardo" value="0" id=seis>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i> Descargar</button> 
                            <!--<button type="reset" class="btn btn-danger"><i class="icofont icofont-trash"></i> Borrar</button>.-->
                        </div>
                    </div>
                    <!--<a href="{{--URL::to('cms/dashboard/catalogo/reservaciones/descargar-folio/'.base64_encode($folio->id))--}}" class="btn btn-info">
                        <i class="icofont icofont-file-pdf"></i>Descargar Folio
                    </a>-->

                    





                    {{ Form::close() }} 
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
<script type="text/javascript">
$(document).ready(function(){
  
  function multiplicar(){
    var uno, dos, tres, operacion;
  
      uno = $('#uno');
      dos = $('#dos');
      tres = $('#tres');
      
      operacion = parseInt(uno.val()) - parseInt(dos.val());
      tres.val(operacion);
    
  }
  
  $("#uno").keyup(function(){
      
      var dos;
      dos = $('#dos').val();
      
      if(dos != ""){
        multiplicar()
      }
      
  });
  
  $("#dos").keyup(function(){
      
      var uno;
      uno = $('#uno').val();
      
      if(dos != ""){
        multiplicar()
      }
      
  });
  
 
})

/**/

$(document).ready(function(){
  
  function sumar(){
    var tres, cinco, seis, operacion;
  
      tres = $('#tres');
      cinco = $('#cinco');
      seis = $('#seis');
      
      operacion = parseInt(tres.val()) + parseInt(cinco.val());
      seis.val(operacion);
    
  }
  
  $("#tres").keyup(function(){
      
      var cinco;
      cinco = $('#cinco').val();
      
      if(cinco != ""){
        sumar()
      }
      
  });
  
  $("#cinco").keyup(function(){
      
      var tres;
      tres = $('#tres').val();
      
      if(cinco != ""){
        sumar()
      }
      
  });
  
 
})
</script>
@stop
