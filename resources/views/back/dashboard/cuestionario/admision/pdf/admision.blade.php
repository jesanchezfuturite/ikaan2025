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
            INFORMACIÓN DE ADMISIÓN
        </td>
    </tr>
</table><br><br>

<!---->
<table style="width:100%;border-collapse: collapse;border: 1px solid black;">
    <tr>
        <td rowspan="5"  style="border: 1px solid black;padding: 5px;">
            <p style="text-align: center;font-size: 15px;font-weight: bold;">NOMBRE</p>
            <p style="text-align: center;">
                {{$request->nombre}}
            </p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black;padding: 5px;"><b style="font-size: 15px;">FECHA DE ENTRADA:</b> {{$request->fec_entrada}}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;padding: 5px;"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;padding: 5px;"><b style="font-size: 15px;">FECHA DE SALIDA:</b>{{$request->fec_salida}}</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;padding: 5px;"></td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%; border: 1px solid black;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">CORREO ELECTRÓNICO</b><br> {{$request->correo_elec}}</td>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">FECHA DE CUMPLEAÑOS</b><br> {{$request->fec_nac}}</td>
    </tr>
</table>
<!----><!---->
<br>
<table style="width:100%; border: 1px solid black;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">TELÉFONO</b><br> 
            {{$request->telefono}}
        </td>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">CELULAR</b><br> 
            {{$request->celular}}
        </td>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">FECHA DE ANIVERSARIO</b><br> 
            {{$request->fech_aniver}}
        </td>
    </tr>
</table>
<!---->
<!---->
<br>
<table style="width:100%; border: 1px solid black;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">LUGAR ASIGNADO</b><br>
            {{$request->lugar_asignado}}
        </td>
        <td style="padding: 5px; text-align: center;"><b style="font-size: 15px;"></td>
        <td style="border: 1px solid black;padding: 5px; text-align: center;"><b style="font-size: 15px;">SERVICIO SOLICITADO</b><br> 
            {{$request->servicio_solic}}
        </td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%; border: 1px solid black;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;padding: 5px; text-align: center;">
            <b style="font-size: 15px;">EDAD</b><br>
            <?php 
            if ($request->edad == "18-24") { ?>
                <input class="w3-check" type="checkbox" checked=""><label>18-24</label><br>
                <input class="w3-check" type="checkbox"><label>25-34</label><br>
                <input class="w3-check" type="checkbox"><label>35-44</label><br>
                <input class="w3-check" type="checkbox"><label>45-55</label><br>
                <input class="w3-check" type="checkbox"><label>56-64</label><br>
                <input class="w3-check" type="checkbox"><label>65 +</label><br>
            <?php }elseif ($request->edad == "25-34") {?>
                <input class="w3-check" type="checkbox"><label>18-24</label><br>
                <input class="w3-check" type="checkbox" checked=""><label>25-34</label><br>
                <input class="w3-check" type="checkbox"><label>35-44</label><br>
                <input class="w3-check" type="checkbox"><label>45-55</label><br>
                <input class="w3-check" type="checkbox"><label>56-64</label><br>
                <input class="w3-check" type="checkbox"><label>65 +</label><br>
            <?php }elseif ($request->edad == "35-44") { ?>
                <input class="w3-check" type="checkbox"><label>18-24</label><br>
                <input class="w3-check" type="checkbox"><label>25-34</label><br>
                <input class="w3-check" type="checkbox" checked=""><label>35-44</label><br>
                <input class="w3-check" type="checkbox"><label>45-55</label><br>
                <input class="w3-check" type="checkbox"><label>56-64</label><br>
                <input class="w3-check" type="checkbox"><label>65 +</label><br>
            <?php }elseif ($request->edad == "45-55") { ?>
                <input class="w3-check" type="checkbox"><label>18-24</label><br>
                <input class="w3-check" type="checkbox"><label>25-34</label><br>
                <input class="w3-check" type="checkbox"><label>35-44</label><br>
                <input class="w3-check" type="checkbox" checked=""><label>45-55</label><br>
                <input class="w3-check" type="checkbox"><label>56-64</label><br>
                <input class="w3-check" type="checkbox"><label>65 +</label><br>
            <?php }elseif($request->edad == "56-64") { ?>
                <input class="w3-check" type="checkbox"><label>18-24</label><br>
                <input class="w3-check" type="checkbox"><label>25-34</label><br>
                <input class="w3-check" type="checkbox"><label>35-44</label>
                <input class="w3-check" type="checkbox"><label>45-55</label><br>
                <input class="w3-check" type="checkbox" checked=""><label>56-64</label><br>
                <input class="w3-check" type="checkbox"><label>65 +</label><br>
            <?php }else{ ?>
                <input class="w3-check" type="checkbox"><label>18-24</label><br>
                <input class="w3-check" type="checkbox"><label>25-34</label><br>
                <input class="w3-check" type="checkbox"><label>35-44</label><br>
                <input class="w3-check" type="checkbox"><label>45-55</label><br>
                <input class="w3-check" type="checkbox"><label>56-64</label><br>
                <input class="w3-check" type="checkbox" checked=""><label>65 +</label><br>
            <?php } ?>
        </td>
        <td style="padding: 5px; text-align: center;"><b style="font-size: 15px;">
        </td>
        <td style="border: 1px solid black;padding: 5px;">
            <b style="font-size: 15px;">¿PADECE DE ALGUNA ENFERMEDAD?</b><br> 
            <?php 
            if ($request->alguna_enfer == "ninguna") {?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox" checked=""><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox"><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox"><br>
                <label>Asma</label> <input class="w3-check" type="checkbox"><br>
                <label>Otro</label> <input class="w3-check" type="checkbox"><br>

            <?php } elseif($request->alguna_enfer == "diabetes") {?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox" ><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox" checked=""><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox"><br>
                <label>Asma</label> <input class="w3-check" type="checkbox"><br>
                <label>Otro</label> <input class="w3-check" type="checkbox"><br>

            <?php } elseif($request->alguna_enfer == "cardiovascular") { ?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox" ><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox" ><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox" checked=""><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox"><br>
                <label>Asma</label> <input class="w3-check" type="checkbox"><br>
                <label>Otro</label> <input class="w3-check" type="checkbox"><br>

            <?php } elseif($request->alguna_enfer == "presion-arterial-baja") { ?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox" ><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox" ><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox" checked=""><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox"><br>
                <label>Asma</label> <input class="w3-check" type="checkbox"><br>
                <label>Otro</label> <input class="w3-check" type="checkbox"><br>

            <?php } elseif($request->alguna_enfer == "presion-arterial-alta") { ?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox" ><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox" ><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox" checked=""><br>
                <label>Asma</label> <input class="w3-check" type="checkbox"><br>
                <label>Otro</label> <input class="w3-check" type="checkbox"><br>

            <?php } elseif($request->alguna_enfer == "asma") { ?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox" ><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox" ><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox"><br>
                <label>Asma</label> <input class="w3-check" type="checkbox" checked=""><br>
                <label>Otro</label> <input class="w3-check" type="checkbox"><br>

            <?php } elseif($request->alguna_enfer == "otro") { ?>
                <label>Ninguna</label> <input class="w3-check" type="checkbox"><br>
                <label>Diabetes</label> <input class="w3-check" type="checkbox"><br>
                <label>Cardiovascular</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial baja</label> <input class="w3-check" type="checkbox"><br>
                <label>Presión arterial alta</label> <input class="w3-check" type="checkbox"><br>
                <label>Asma</label> <input class="w3-check" type="checkbox"><br>
                Otro: <input type="text" value="{{$request->alguna_enfer}}" style="border: 0px; border-bottom: 1px solid;">
            <?php } ?>

        </td>
    </tr>
</table>
<!----><!---->
<br>

<!----><!---->

<!----><!---->

<!----><!---->

<!----><!---->

<!----><!---->


<table style="width:100%;">
    <tr>
        <td style="font-size: 12px;">
           ESTA INFORMACIÓN SERA COMPLETAMENTE SOLO PARA EL USO INTERNO
        </td>
    </tr>
</table><br>

