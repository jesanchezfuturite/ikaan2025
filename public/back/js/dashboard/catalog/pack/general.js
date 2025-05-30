$(document).ready(function () {


    $(this).on("click", ".add_photo_row", function (e) {
        e.preventDefault();
        add_row_photo_gallery();
    });


    $(this).on("click", ".add_caracteristica_row", function (e) {
        e.preventDefault();
        add_row_caracteristica();
    });


    var today = new Date();
    var y = today.getFullYear();

    //Generamos el array que fechas seleccionables para que todoo el año esta seleccionado
    // var dates_selected = new Array();
    //
    // for(var month = today.getMonth(); month < 12; month++){
    //     var total_in_moth = daysInMonth(month, y);
    //
    //     //Si es el mes actual, comenzamos con el dia de hoy,
    //     var start_day = 1;
    //     if( today.getMonth() == month ){
    //         start_day = today.getDate();
    //     }
    //
    //     for(var day = start_day; day <= total_in_moth; day++){
    //         var set_date = new Date(y, month, day);
    //         dates_selected.push( set_date );
    //     }
    // }


    $('#fecha_disponibilidad').multiDatesPicker({
        numberOfMonths: [3,4],
        defaultDate: '1/1/'+y,
        // addDates: dates_selected,
        minDate: 0,
    });

});



function daysInMonth (month, year) {
    return new Date(year, (month + 1), 0).getDate();
}



function add_row_photo_gallery() {

    var html = "";
    html += '<div class="input-group mb-3">';
    html += '    <input type="file" class="form-control" name="imagen_galeria[]" />';
    html += '    <div class="input-group-append">';
    html += '        <button class="btn btn-danger" type="button" onclick="$(this).parent().parent().remove();">Eliminar</button>';
    html += '    </div>';
    html += '</div>';

    $("#fotografias_group").append(html);

}

function add_row_caracteristica() {

    var html = "";
    html += '<div class="input-group mb-3">';
    html += '    <input type="text" class="form-control" name="caracteristica_name[]" />';
    html += '    <div class="input-group-append">';
    html += '        <button class="btn btn-danger" type="button" onclick="$(this).parent().parent().remove();">Eliminar</button>';
    html += '    </div>';
    html += '</div>';

    $("#caracteristicas_group").append(html);

}