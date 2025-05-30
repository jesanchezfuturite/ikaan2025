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
</table>
<!---->
<table style="width:100%;border-collapse: collapse;border: 1px solid black;">
    <tr>
        <td style="border: 1px solid black; width: 50%;">
            <b>Nombre</b><br>
            {{$products->cli->nombre_completo}}
        </td>
        <td style="border: 1px solid black;">
            <b>Fecha Entrada</b><br>
            {{$products->fecha_entrada}}
        </td>
        <td style="border: 1px solid black;">
            <b>Fecha Salida</b><br>
            {{$products->fecha_salida}}
        </td>
    </tr>
</table>
<!---->
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td rowspan="2" style="border-right: 1px solid black;border-left: 1px solid black;border-bottom: 1px solid black; width: 50%;">
            <b>Correo Electronico</b><br>
            {{$products->cli->email}}
        </td>
        <td style="border-right: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;">
            <b>Telefono</b><br>
            {{$products->cli->telefono}}
        </td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black;">
            <b>Cel</b><br>
            {{$products->cli->celular}}
        </td>
    </tr>
</table>
<table style="width:100%;border-collapse: collapse;border: 1px solid black;">
    <tr>
        <td style="border: 1px solid black;height: 50px;">
            <b>Servicio proporcionado:</b><br>
        </td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td>INSTALACIONES:</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;">Excelente</td>
        <td style="border: 1px solid black;">Bueno</td>
        <td style="border: 1px solid black;">Regular</td>
        <td style="border: 1px solid black;">Malo</td>
        <td style="border: 1px solid black;">Pésimo</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Comodidad</td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Limpieza</td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td>ALIMENTOS:</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;">Excelente</td>
        <td style="border: 1px solid black;">Bueno</td>
        <td style="border: 1px solid black;">Regular</td>
        <td style="border: 1px solid black;">Malo</td>
        <td style="border: 1px solid black;">Pésimo</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Comodidad</td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Limpieza</td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
    </tr>
</table>
<!---->
<br><br>
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td>PERSONAL:</td>
    </tr>
    <tr>
        <td></td>
        <td style="border: 1px solid black;">Excelente</td>
        <td style="border: 1px solid black;">Bueno</td>
        <td style="border: 1px solid black;">Regular</td>
        <td style="border: 1px solid black;">Malo</td>
        <td style="border: 1px solid black;">Pésimo</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Comodidad</td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Limpieza</td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
        <td style="border: 1px solid black;"></td>
    </tr>
</table>
<!--Observaciones-->
<br>
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;">OBSERVACIONES:</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;height:50px;"></td>
    </tr>
</table>
<!--Recomendados-->
<br>
<table style="width:100%;"> 
    <tr>
        <td style="font-size: 16px;">
            <b>RECOMENDADOS:</b>
        </td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;">Nombre:</td>
        <td style="border: 1px solid black;">Teléfono:</td>
        <td style="border: 1px solid black;">Correo:</td>
        <td style="border: 1px solid black;">Facebook:</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
        <td style="border: 1px solid black;height:20px;"></td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;">Le gustaria recibir informacion:</td>
        <td style="border: 1px solid black;width:10%;"></td>
        <td style="border: 1px solid black;width:10%;"></td>
    </tr>
</table>
<!---->
<br>
<table style="width:100%;"> 
    <tr>
        <td style="font-size: 18px;">
            Su información será confidencial y solo para uso interno<br>
            En caso de calificar  cualquier concepto de "Regular" o inferior, le agradeceríamos sus comentarios en el área de "Observaciones".
        </td>
    </tr>
</table>