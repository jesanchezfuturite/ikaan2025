<table style="width:100%;">
    <tr>
        <td>
            <center><img src="{{ url('assets/img/logo_separator.jpg') }}"></center> 
        </td>
    </tr> 
    <tr>
        <td style="font-size: 18px;text-align: center;">
            <b>EVALUACIÓN DEL SERVICIO PROPORCIONADO</b>
        </td>
    </tr>
</table><br>
<!---->
<table style="width:100%;border-collapse: collapse;border: 1px solid black;font-size: 15px;">
    <tr>
        <td style="border: 1px solid black; width: 50%;">
            <b>Nombre: </b> {{$products->cliente}}
        </td>
        <td style="border: 1px solid black;">
            <b>Fecha Entrada: </b>{{$products->fecha_entrada}}
        </td>
        <td style="border: 1px solid black;">
            <b>Fecha Salida:</b> {{$products->fecha_salida}}
        </td>
    </tr>
</table>
<table style="width:100%;border-collapse: collapse;border-left: 1px solid;border-right: 1px solid;font-size: 15px;">
    <tr>
        <td style="width: 50%;border-right: 1px solid;" rowspan="2">
            <b>Correo Eletrónico: </b>{{$products->correo}}
        </td>
        <td>
            <b>Teléfono: </b>{{$products->telefono}}
        </td>
    </tr>
    <tr>
        <td style="border-top: 1px solid;">
            <b>Cel. </b>{{$products->cel}}
        </td>
    </tr>
</table>
<table style="width:100%;border-collapse: collapse;border: 1px solid black;font-size: 15px;">
    <tr>
        <td style=";border-left: 1px solid black;border-right: 1px solid black; width: 50%;">
            <b>Servicio Proporcionado: </b>{{$products->serv_proporcionado}}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">
            <b>Nombre del Paquete: </b>{{$products->paquete}}
        </td>
    </tr>
</table><br><br>
<!---->
<!---->
<table style="width:100%;border-collapse: collapse;font-size: 15px;">
    <tr>
        <td style="width: 50%;">
            <b>INSTALACIONES:</b><br>
        </td>
    </tr>
</table>
<table style="width:100%;border-collapse: collapse;font-size: 15px;text-align: center;">
	<?php
	$ins_uno="";
	$ins_dos="";
	$ins_tres="";
	$ins_cuatro="";
	$ins_cinco="";
		if ($products->comodidad == 'Excelente') {
			$ins_uno = "X";
		}else if($products->comodidad == 'Bueno'){
			$ins_dos = "X";
		}else if($products->comodidad == 'Regular'){
			$ins_tres = "X";
		}else if($products->comodidad == 'Malo'){
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
        if ($products->limpieza == 'Excelente') {
            $lim_uno = "X";
        }else if($products->limpieza == 'Bueno'){
            $lim_dos = "X";
        }else if($products->limpieza == 'Regular'){
            $lim_tres = "X";
        }else if($products->limpieza == 'Malo'){
            $lim_cuatro = "X";
        }else{
            $lim_cinco = "X";
        }
	?>
    <tr>
        <td style="width: 20%;">
            
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Excelente</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Bueno</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Regular</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Malo</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Pésimo</b>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Comodidad</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $ins_uno ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $ins_dos ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $ins_tres ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $ins_cuatro ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <?php echo $ins_cinco ?>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Limpieza</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $lim_uno ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $lim_dos ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $lim_tres ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $lim_cuatro ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $lim_cinco ?></b>
        </td>
    </tr>
</table><br><br>
<!---->
<table style="width:100%;border-collapse: collapse;font-size: 15px;">
    <tr>
        <td style="width: 50%;">
            <b>ALIMENTOS:</b><br>
        </td>
    </tr>
</table>
<table style="width:100%;border-collapse: collapse;font-size: 15px;text-align: center;">
    <?php
    $uno="";
    $dos="";
    $tres="";
    $cuatro="";
    $cinco="";
        if ($products->presentacion == 'Excelente') {
            $uno = "X";
        }else if($products->presentacion == 'Bueno'){
            $dos = "X";
        }else if($products->presentacion == 'Regular'){
            $tres = "X";
        }else if($products->presentacion == 'Malo'){
            $cuatro = "X";
        }else{
            $cinco = "X";
        }
    $cal_uno="";
    $cal_dos="";
    $cal_tres="";
    $cal_cuatro="";
    $cal_cinco="";
        if ($products->calidad == 'Excelente') {
            $cal_uno = "X";
        }else if($products->calidad == 'Bueno'){
            $cal_dos = "X";
        }else if($products->calidad == 'Regular'){
            $cal_tres = "X";
        }else if($products->calidad == 'Malo'){
            $cal_cuatro = "X";
        }else{
            $cal_cinco = "X";
        }
    ?>
    <tr>
        <td style="width: 20%;">
            
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Excelente</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Bueno</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Regular</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Malo</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Pésimo</b>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Presentación</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $uno; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $dos; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $tres; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cuatro; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cinco; ?></b>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Calidad</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cal_uno ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cal_dos ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cal_tres ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cal_cuatro ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $cal_cinco ?></b>
        </td>
    </tr>
</table><br><br>
<!---->
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td style="width: 50%;">
            <b>PERSONAL:</b><br>
        </td>
    </tr>
</table>
<table style="width:100%;border-collapse: collapse;font-size: 15px;text-align: center;">
    <?php
    $prof_uno="";
    $prof_dos="";
    $prof_tres="";
    $prof_cuatro="";
    $prof_cinco="";
        if ($products->profesionalismo == 'Excelente') {
            $prof_uno = "X";
        }else if($products->profesionalismo == 'Bueno'){
            $prof_dos = "X";
        }else if($products->profesionalismo == 'Regular'){
            $prof_tres = "X";
        }else if($products->profesionalismo == 'Malo'){
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
        if ($products->act_servicio == 'Excelente') {
            $act_uno = "X";
        }else if($products->act_servicio == 'Bueno'){
            $act_dos = "X";
        }else if($products->act_servicio == 'Regular'){
            $act_tres = "X";
        }else if($products->act_servicio == 'Malo'){
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
        if ($products->p_presentacion == 'Excelente') {
            $pres_uno = "X";
        }else if($products->p_presentacion == 'Bueno'){
            $pres_dos = "X";
        }else if($products->p_presentacion == 'Regular'){
            $pres_tres = "X";
        }else if($products->p_presentacion == 'Malo'){
            $pres_cuatro = "X";
        }else{
            $pres_cinco = "X";
        }
    ?>
    <tr>
        <td style="width: 20%;">
            
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Excelente</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Bueno</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Regular</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Malo</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b>Pésimo</b>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Profesionalismo</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $prof_uno; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $prof_dos; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $prof_tres; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $prof_cuatro; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $prof_cinco; ?></b>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Actitud de Servicio</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $act_uno; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $act_dos; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $act_tres; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $act_cuatro; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $act_cinco; ?></b>
        </td>
    </tr>
    <tr style="border: 1px solid black;">
        <td style="width: 20%;border: 1px solid black;">
            <b>Presentación</b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $pres_uno; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $pres_dos; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $pres_tres; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $pres_cuatro; ?></b>
        </td>
        <td style="width: 16%;border: 1px solid black;">
            <b><?php echo $pres_cinco; ?></b>
        </td>
    </tr>
</table>
<br>
<!---->
<table style="width:100%;border-collapse: collapse;border: 1px solid black;font-size: 15px;">
    <tr>
        <td style="border: 1px solid black; width: 50%;">
            <b>OBSERVACIONES:</b><br>
            {{$products->observaciones}}
        </td>
    </tr>
</table><br>
<!---->
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td style="width: 50%;">
            <b>RECOMENDADOS:</b><br>
        </td>
    </tr>
</table>
<!---->
<table style="width:100%;border-collapse: collapse;border: 1px solid black;font-size: 15px;text-align: center;">
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
            {{$products->r_nombre}}
        </td>
        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
            {{$products->r_telefono}}
        </td>
        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
           {{$products->r_correo}}
        </td>
        <td style="border: 1px solid black; width: 25%;font-size: 14px;">
            {{$products->facebook}}
        </td>
    </tr>
</table><br><br>
<!---->
<?php 
    $result = "";
    $result2 = "";
    if ($products->mas_info == 1) {
        $result = "X";
    }else{
        $result2 = "X";
    }
?>
<table style="width:100%;border-collapse: collapse;text-align: center;font-size: 15px; ">
    <tr>
        <td style="width: 40%;border: 1px solid black;">
            <b>Le gustaría recibir información</b><br>
        </td>
        <td style="width: 5%;border: 1px solid black;">
            <b>SI</b>
        </td>
        <td style="width: 5%;border: 1px solid black;">
            <b>{{$result}}</b>
        </td>
        <td style="width: 5%;border: 1px solid black;">
            <b>NO</b>
        </td>
        <td style="width: 5%;border: 1px solid black;">
            <b>{{$result2}}</b>
        </td>
        <td style="width: 40%;border: 1px solid black;">
        </td>
    </tr>
</table><br>
<table style="width:100%;">
    <tr>
        <td style="font-size: 12px;">
            Su información será confidencial y solo para uso interno.<br>
            En caso de calificar cualquier concepto de "Regular" o inferior, le agradeceríamos sus comentarios en el área de "Observaciones".
        </td>
    </tr>
</table><br>