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
            Información de la reservación
        </td>
    </tr>
</table><br><br>

  <table style="width:100%; text-align: center;">
    <tr>
        <td style="width:10%;">
            <b>Cliente</b>
        </td>
        <td style="width:40%;">
        	<input type="text" value="{{$request->nombre_cliente}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
        <td style="width:10%;">
        </td>
        <td style="width:40%;">
            <input type="text" value="# {{$request->folio}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <tr>
        <td style="width:10%;">
        </td>
        <td style="width:40%;">
        </td>
        <td style="width:10%;">
            <b>Personas</b>
        </td>
        <td style="width:40%;">
            <input type="text" value="{{$request->num_personas}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <tr>
        <td style="width:10%;">
        </td>
        <td style="width:40%;">
        </td>
        <td style="width:10%;">
            <b>Villa</b>
        </td>
        <td style="width:40%;">
            <input type="text" value="{{$request->tipo_habitacion}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <tr>
        <td style="width:10%;">
            <b>Teléfono</b>
        </td>
        <td style="width:40%;">
            <input type="text" value="{{$request->telefono}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
        <td style="width:10%;">
            <b>Paquetes</b>
        </td>
        <td style="width:40%;">
            <input type="text" value="{{$request->paquetes}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <tr>
        <td style="width:10%;">
            <b>Email</b>
        </td>
        <td style="width:40%;">
            <input type="text" value="{{$request->email}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
        <td style="width:10%;">
            <b>Promoción</b>
        </td>
        <td style="width:40%;">
            <input type="text" value="{{$request->promocion}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
</table>
<table style="width:100%;padding-top: 15px;">
    <tr  style="width:100%; padding-top: 15px;">
        <td style="width:10%;">
            <b>Comentarios</b>
        </td>
        <td style="width:90%;">
            <input type="text" value="{{$request->observaciones}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
    </tr>
</table>
<table style="width:100%; padding-top: 15px;">
    <tr>
        <td style="width:13%;">
            <b>Check-in</b>
        </td>
        <td style="width:20%;">
            <input type="text" value="{{$request->check_in}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
        <td style="width:13%;">
            <b>Check-out</b>
        </td>
        <td style="width:20%;">
            <input type="text" value="{{$request->check_out}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
        <td style="width:13%;">
            <b>Hora llegada</b>
        </td>
        <td style="width:20%;">
            <input type="text" value="{{$request->hora_llegada}}" style="width: 100%;padding: 5px;border-bottom: 1px solid #000 !important; border: 1px solid #fff;color: #464a4c;font-size: 14px">
        </td>
    </tr>
</table>
<table style="width:100%; padding-top: 15px;">
    <tr>
        <td style="width:30%;">
            <?php 
                if ($especificaciones == 0) {?>
                    <input  type="checkbox" style="width: 24px;height: 24px;position: relative; top: 6px;"><label>  Ficha de Especificaciones</label>
                <?php }else{?>
                    <input  type="checkbox"  style="width: 24px;height: 24px;position: relative; top: 6px;" checked><label>  Ficha de Especificaciones</label>
                <?php }
            ?>
        </td>
        <td style="width:20%;">
            <b>Costo por Persona</b>
        </td>
        <td style="width:30%;">
            <input type="text"  value="{{$request->costo_persona}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <!----------------------->
    <tr>
        <td style="width:30%;">
        </td>
        <td style="width:20%;">
            <b>Total</b>
        </td>
        <td style="width:30%;">
            <input type="text"  value="{{$request->total}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <!----------------------->
    <tr>
        <td style="width:30%;">
        </td>
        <td style="width:20%;">
            <b>Anticipo</b>
        </td>
        <td style="width:30%;">
            <input type="text"  value="{{$request->anticipo}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <!----------------------->
    <tr>
        <td style="width:30%;">
        </td>
        <td style="width:20%;">
            <b>Saldos</b>
        </td>
        <td style="width:30%;">
            <input type="text"  value="{{$request->saldos}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <!----------------------->
    <tr>
        <td style="width:30%;">
        </td>
        <td style="width:20%;">
            <b>Extras</b>
        </td>
        <td style="width:30%;">
            <input type="text"  value="{{$request->extras}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
    <!----------------------->
    <tr>
        <td style="width:30%;">
        </td>
        <td style="width:20%;">
            <b>Total:</b>
        </td>
        <td style="width:30%;">
            <input type="text"  value="{{$request->total_num}}" style="width: 100%;padding: 5px;border: 1px solid black;color: #464a4c;font-size: 14px;">
        </td>
    </tr>
</table>
<br><br><br>
<table style="width:100%;">
    <tr>
        <td style="font-size: 12px; text-align: right;">
            INFORMACIÓN SERA COMPLETAMENTE SOLO PARA EL USO INTERNO
        </td>
    </tr>
</table>


