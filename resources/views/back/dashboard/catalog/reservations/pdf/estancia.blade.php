<table style="width:100%;text-align: center;">
    <tr>
        <td style="width:25%;">
            <img src="https://www.ikaan.com.mx/assets/img/logo_pdf.png" style="height: 100px;text-align: center;">
        </td>
    </tr>
</table>
<table style="width:100%;">
    <tr>
        <td style="width:25%;font-size: 22px; font-weight: bold; text-align: center;">
            ESPECIFICACIONES DE ESTANCIAS Y EVENTOS
        </td>
    </tr>
</table><br><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="SERVICIO SOLICITADO"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:50%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->serv_solicitado ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:15%;border: 1px solid black;">
            <input type="text" value="FOLIO: <?php echo $id ?>"  style="font-size: 12px;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
            <?php
            $fecha = $request->fecha_entrada;
            list($anio, $mes, $dia) = explode("-",$fecha);
            ?>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="FECHA DE ENTRADA"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $anio  ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $mes  ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $dia  ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:35%;">
        </td>
    </tr>
</table>

<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
            <?php
            $fecha = $request->fecha_salida;
            list($anio, $mes, $dia) = explode("-",$fecha);
            ?>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="FECHA DE SALIDA"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $anio  ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $mes  ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $dia  ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:35%;">
        </td>
    </tr>
</table><br>

<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="NOMBRE SOLICITANTE"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:65%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->nom_solicitado ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="CORREO ELECTRONICO"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:65%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->correo ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="EMPRESA"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:65%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->empresa ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="DIRECCIÓN"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:30%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->direccion ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:10%;">
            <b>RFC:</b>
        </td>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->rfc ?>"  style="padding:10px;border: 0px solid red;font-size: 12px;width: 100%;">
        </td>
    </tr>
</table><br>



<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="TELÉFONO"  style="font-size: 12px;padding: 10px;text-align: center; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:40%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->telefono ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="CELULAR <?php echo $request->celular ?>"  style="padding:10px;border: 0px solid red;font-size: 12px;width: 100%;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="width:100%;border-spacing: 0px;text-align: center;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="FORMA DE PAGO" style="font-size: 12px;padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:30%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->form_pago ?>" style="padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:23%;border: 1px solid black;">
            <input type="text" value="PAGO POR PERSONA" style="font-size: 12px;padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:12%;border: 1px solid black;">
            <?php echo $request->pago_persona ?>
        </td>
    </tr>
</table>
<!----------------------------------------------------->
<table style="width:100%;border-spacing: 0px;text-align: center;">
    <tr>>
        <td style="width:25%;"> </td>
        <td style="width:10%;">
        </td>
        <td style="width:30%;"> </td>
        <td style="width:23%;border: 1px solid black;">
            <input type="text" value="TOTAL A PAGAR" style="font-size: 12px;padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:12%;border: 1px solid black;">
            <?php echo $request->total_pagar ?>
        </td>
    </tr>
</table>
<!----------------------------------------------------->
<table style="width:100%;border-spacing: 0px;text-align: center;">
    <tr>>
        <td style="width:25%;"> </td>
        <td style="width:10%;">
        </td>
        <td style="width:30%;"> </td>
        <td style="width:23%;border: 1px solid black;">
            <input type="text" value="ANTICIPO" style="font-size: 12px;padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:12%;border: 1px solid black;">
            <?php echo $request->anticipo ?>
        </td>
    </tr>
</table>
<!----------------------------------------------------->
<table style="width:100%;border-spacing: 0px;text-align: center;">
    <tr>>
        <td style="width:25%;"> </td>
        <td style="width:10%;">
        </td>
        <td style="width:30%;"> </td>
        <td style="width:23%;border: 1px solid black;">
            <input type="text" value="SALDO" style="font-size: 12px;padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:12%;border: 1px solid black;">
            <?php echo $request->saldo ?>
        </td>
    </tr>
</table>
<!----------------------------------------------------->
<table style="width:100%;border-spacing: 0px;text-align: center;">
    <tr>
        <td style="width:25%;"> </td>
        <td style="width:10%;">
        </td>
        <td style="width:30%;"> </td>
        <td style="width:23%;border: 1px solid black;">
            <input type="text" value="h" style="font-size: 12px;padding: 10px;width: 100%;border: 0px solid red;">
        </td>
        <td style="width:12%;border: 1px solid black;">
            <?php echo $request->total ?>
        </td>
    </tr>
</table>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="NÚMERO DE PERSONAS"  style="font-size: 12px;padding: 10px; width: 100%;border: 0px solid;">
        </td>
        <td style="width:15%;">
        </td>
        <td style="width:10%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->num_persona ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
        <td style="width:50%;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:27%;border: 1px solid black;">
            <input type="text" value="INSTALACIONES QUE VAN A USAR"  style="font-size: 12px;padding: 10px; width: 100%;border: 0px solid;">
        </td>
        <td style="width:13%;">
        </td>
        <td style="width:60%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->inst_usar ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="ESPECIFICACIONES DEL EVENTO O SERVICIO"  style="font-size: 12px;padding: 10px; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:65%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->esp_evento ?>"  style="font-size: 12px;padding: 10px; width: 100%;border: 0px solid;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="text-align: center;width:100%;border-spacing: 0px;">
    <tr>
        <td style="width:25%;border: 1px solid black;">
            <input type="text" value="SERVICIO DE SPA"  style="font-size: 12px;padding: 10px; width: 100%;border: 0px solid;">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width: 65%;border: 1px solid black;">
            <input type="text" value="<?php echo $request->serv_spa ?>"  style="font-size: 12px;text-align: center;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br>
<!----------------------------------------------------->
<table style="width:100%;border-spacing: 0px; text-align: center;">
    <tr>
        <td style="width:20%;border: 1px solid black;">
            <input type="text" value="CONTACTO DE:"  style="font-size: 12px;padding: 10px; width: 100%;border: 0px solid;">
        </td>
        <td style="width:20%;border: 1px solid black;">
            <?php echo $request->contacto_de ?>
        </td>
        <td style="width:10%;">
        </td>
        <td style="width: 60%;border: 1px solid black;">
            <input type="text" value="SEGUIMIENTO Y ATENDIDO POR: <?php echo $request->seg_atendido ?>"  style="font-size: 12px;width: 100%;border: 0px solid red;padding:10px;">
        </td>
    </tr>
</table><br>
<table style="width:100%;">
    <tr>
        <td style="font-size: 11px; text-align: left;">
            INFORMACIÓN SERA COMPLETAMENTE SOLO PARA EL USO INTERNO
        </td>
    </tr>
</table>