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
table{
    width: 100%;
}
.tabla_02{
    border-collapse: collapse;
    border: 1px solid black;
    font-size: 15px;
}
.tabla_02 td{
    border: 1px solid black;
}
.tabla_03{
    border-collapse: collapse;
    border-left: 1px solid;
    border-right: 1px solid;
    font-size: 15px;

}
.tabla_04{
    width:100%;
    border-collapse: collapse;
    font-size: 15px;
}
.tabla_05{
    width:100%;
    border-collapse: collapse;
    font-size: 15px;
    text-align: center;
}
.tabla_05 td{
    border: 1px solid black;
}
.titulo_tabla{
    font-size: 18px;text-align: center;
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
    <a href="{{ url('cms/dashboard/cuestionario/servicio') }}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table>
                    <tr>
                        <td>
                            <center><img src="{{ url('assets/img/logo_separator.jpg') }}"></center> 
                        </td>
                    </tr> 
                    <tr>
                        <td class="titulo_tabla">
                            <b>EVALUACIÓN DEL SERVICIO PROPORCIONADO</b>
                        </td>
                    </tr>
                </table><br>
                <table class="tabla_02">
                    <tr>
                        <td style="width: 50%;">
                            <b>Nombre: </b> 
                        </td>
                        <td>
                            <b>Fecha Entrada: </b>
                        </td>
                        <td>
                            <b>Fecha Salida:</b> 
                        </td>
                    </tr>
                </table>
                <table class="tabla_03">
                    <tr>
                        <td style="width: 50%;border-right: 1px solid;" rowspan="2">
                            <b>Correo Eletrónico: </b>{{$evaluacion->correo}}
                        </td>
                        <td>
                            <b>Teléfono: </b>{{$evaluacion->telefono}}
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top: 1px solid;">
                            <b>Cel. </b>{{$evaluacion->cel}}
                        </td>
                    </tr>
                </table>
                <table class="tabla_02">
                    <tr>
                        <td>
                            <b>Servicio Proporcionado: </b>{{$evaluacion->serv_proporcionado}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Nombre del Paquete: </b>{{$evaluacion->paquete}}
                        </td>
                    </tr>
                </table><br><br>
                <table class="tabla_04">
                    <tr>
                        <td style="width: 50%;">
                            <b>INSTALACIONES:</b><br>
                        </td>
                    </tr>
                </table>
                <table class="tabla_05">
                    <?php
                    $ins_uno="";
                    $ins_dos="";
                    $ins_tres="";
                    $ins_cuatro="";
                    $ins_cinco="";
                        if ($evaluacion->comodidad == 'Excelente') {
                            $ins_uno = "X";
                        }else if($evaluacion->comodidad == 'Bueno'){
                            $ins_dos = "X";
                        }else if($evaluacion->comodidad == 'Regular'){
                            $ins_tres = "X";
                        }else if($evaluacion->comodidad == 'Malo'){
                            $ins_cuatro = "X";
                        }else{
                            $ins_cinco = "X";
                        }
                    //LIMPIEZA
                    $lim_uno="";
                    $lim_dos="";
                    $lim_tres="";
                    $lim_cuatro="";
                    $lim_cinco="";
                        if ($evaluacion->limpieza == 'Excelente') {
                            $lim_uno = "X";
                        }else if($evaluacion->limpieza == 'Bueno'){
                            $lim_dos = "X";
                        }else if($evaluacion->limpieza == 'Regular'){
                            $lim_tres = "X";
                        }else if($evaluacion->limpieza == 'Malo'){
                            $lim_cuatro = "X";
                        }else{
                            $lim_cinco = "X";
                        }
                    ?>
                    <tr>
                        <td style="width: 20%;border: 0px solid">
                            
                        </td>
                        <td style="width: 16%;">
                            <b>Excelente</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Bueno</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Regular</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Malo</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Pésimo</b>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Comodidad</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $ins_uno ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $ins_dos ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $ins_tres ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $ins_cuatro ?></b>
                        </td>
                        <td style="width: 16%;">
                            <?php echo $ins_cinco ?>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Limpieza</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $lim_uno ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $lim_dos ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $lim_tres ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $lim_cuatro ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $lim_cinco ?></b>
                        </td>
                    </tr>
                </table><br><br>
                <!---->
                <table class="tabla_04">
                    <tr>
                        <td style="width: 50%;">
                            <b>ALIMENTOS:</b><br>
                        </td>
                    </tr>
                </table>
                <table  class="tabla_05">
                    <?php
                    $uno="";
                    $dos="";
                    $tres="";
                    $cuatro="";
                    $cinco="";
                        if ($evaluacion->presentacion == 'Excelente') {
                            $uno = "X";
                        }else if($evaluacion->presentacion == 'Bueno'){
                            $dos = "X";
                        }else if($evaluacion->presentacion == 'Regular'){
                            $tres = "X";
                        }else if($evaluacion->presentacion == 'Malo'){
                            $cuatro = "X";
                        }else{
                            $cinco = "X";
                        }
                    $cal_uno="";
                    $cal_dos="";
                    $cal_tres="";
                    $cal_cuatro="";
                    $cal_cinco="";
                        if ($evaluacion->calidad == 'Excelente') {
                            $cal_uno = "X";
                        }else if($evaluacion->calidad == 'Bueno'){
                            $cal_dos = "X";
                        }else if($evaluacion->calidad == 'Regular'){
                            $cal_tres = "X";
                        }else if($evaluacion->calidad == 'Malo'){
                            $cal_cuatro = "X";
                        }else{
                            $cal_cinco = "X";
                        }
                    ?>
                    <tr>
                        <td style="width: 20%;border: 0px;">
                            
                        </td>
                        <td style="width: 16%;">
                            <b>Excelente</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Bueno</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Regular</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Malo</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Pésimo</b>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Presentación</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $uno; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $dos; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $tres; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cuatro; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cinco; ?></b>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Calidad</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cal_uno ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cal_dos ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cal_tres ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cal_cuatro ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $cal_cinco ?></b>
                        </td>
                    </tr>
                </table><br><br>
                <!---->
                <table class="tabla_04">
                    <tr>
                        <td style="width: 50%;">
                            <b>PERSONAL:</b><br>
                        </td>
                    </tr>
                </table>
                <table   class="tabla_05">
                    <?php
                    $prof_uno="";
                    $prof_dos="";
                    $prof_tres="";
                    $prof_cuatro="";
                    $prof_cinco="";
                        if ($evaluacion->profesionalismo == 'Excelente') {
                            $prof_uno = "X";
                        }else if($evaluacion->profesionalismo == 'Bueno'){
                            $prof_dos = "X";
                        }else if($evaluacion->profesionalismo == 'Regular'){
                            $prof_tres = "X";
                        }else if($evaluacion->profesionalismo == 'Malo'){
                            $prof_cuatro = "X";
                        }else{
                            $prof_cinco = "X";
                        }
                        //
                    $act_uno="";
                    $act_dos="";
                    $act_tres="";
                    $act_cuatro="";
                    $act_cinco="";
                        if ($evaluacion->act_servicio == 'Excelente') {
                            $act_uno = "X";
                        }else if($evaluacion->act_servicio == 'Bueno'){
                            $act_dos = "X";
                        }else if($evaluacion->act_servicio == 'Regular'){
                            $act_tres = "X";
                        }else if($evaluacion->act_servicio == 'Malo'){
                            $act_cuatro = "X";
                        }else{
                            $act_cinco = "X";
                        }
                        //
                    $pres_uno="";
                    $pres_dos="";
                    $pres_tres="";
                    $pres_cuatro="";
                    $pres_cinco="";
                        if ($evaluacion->p_presentacion == 'Excelente') {
                            $pres_uno = "X";
                        }else if($evaluacion->p_presentacion == 'Bueno'){
                            $pres_dos = "X";
                        }else if($evaluacion->p_presentacion == 'Regular'){
                            $pres_tres = "X";
                        }else if($evaluacion->p_presentacion == 'Malo'){
                            $pres_cuatro = "X";
                        }else{
                            $pres_cinco = "X";
                        }
                    ?>
                    <tr>
                        <td style="width: 20%;border: 0px;">
                            
                        </td>
                        <td style="width: 16%;">
                            <b>Excelente</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Bueno</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Regular</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Malo</b>
                        </td>
                        <td style="width: 16%;">
                            <b>Pésimo</b>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Profesionalismo</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $prof_uno; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $prof_dos; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $prof_tres; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $prof_cuatro; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $prof_cinco; ?></b>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Actitud de Servicio</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $act_uno; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $act_dos; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $act_tres; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $act_cuatro; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $act_cinco; ?></b>
                        </td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="width: 20%;">
                            <b>Presentación</b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $pres_uno; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $pres_dos; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $pres_tres; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $pres_cuatro; ?></b>
                        </td>
                        <td style="width: 16%;">
                            <b><?php echo $pres_cinco; ?></b>
                        </td>
                    </tr>
                </table><br>
                <table class="tabla_02">
                    <tr>
                        <td >
                            <b>OBSERVACIONES:</b><br>
                            {{$evaluacion->observaciones}}
                        </td>
                    </tr>
                </table><br>
                <!---->
                <table>
                    <tr>
                        <td style="width: 50%;">
                            <b>RECOMENDADOS:</b><br>
                        </td>
                    </tr>
                </table>
                <!---->
                <table class="tabla_02">
                    <tr>
                        <td style="border: 1px solid black; width: 25%;">
                            <b>Nombre:</b><br>
                        </td>
                        <td style="border: 1px solid black; width: 25%;">
                            <b>Teléfono:</b><br>
                        </td>
                        <td style="border: 1px solid black; width: 25%;">
                            <b>Correo:</b><br>
                        </td>
                        <td style="border: 1px solid black; width: 25%;">
                            <b>Facebook:</b><br>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
                            {{$evaluacion->r_nombre}}
                        </td>
                        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
                            {{$evaluacion->r_telefono}}
                        </td>
                        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
                           {{$evaluacion->r_correo}}
                        </td>
                        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
                            {{$evaluacion->facebook}}
                        </td>
                    </tr>
                </table><br>
                <!---->
                <table>
                    <tr>
                        <td style="width: 50%;">
                            <a href="{{ url('cms/dashboard/cuestionario/servicio/descargar/'.base64_encode($evaluacion->id)) }}">
                                <button type="submit" class="btn btn-primary"><i class="icofont icofont-save">
                                    </i> Descargar en PDF
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
@stop
