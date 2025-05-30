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
    var dates_selected = new Array();

    //Traemos las fechas y las parseamos
    var dates_edit = $("#fecha_disponibilidad_edit").text();
    dates_edit = dates_edit.split(",");

    for(var i = 0; i < dates_edit.length; i++){
        dates_edit[i] = dates_edit[i].split("-");
        var set_date = new Date(dates_edit[i][0], parseInt(dates_edit[i][1]) - 1, dates_edit[i][2]);
        dates_selected.push( set_date );
    }

//    console.log(dates_selected);

    $('#fecha_disponibilidad').multiDatesPicker({
        numberOfMonths: [3,4],
//        defaultDate: '1/1/'+y,
        addDates: dates_selected,
        minDate: 0,
    });


    // $(this).on("change", "select[name='free_cancel']", function (e) {
    //     var value = $(this).val();
    //     value = (value == 1) ? true : false;
    //     free_cancel_option(value);
    // });
    //
    // free_cancel_option(true);

});


function remove_picture (image_object){

    var url = image_object.attr("href");
    $.ajax({
        url: url,
        type: "GET",
        dataType: "JSON",
        error: function(e){
            if (jgXHR.status == 422){
                modalErrors(JSON.parse(jgXHR.responseText));
            } else {
                errorAlert('!Ups, algo salio mal!');
            }
        },
        success: function(response){
            console.log(response);
            if (response.status == true) {
                swal({
                    title: "¡Excelente!",
                    text: response.message,
                    type: "success",
                    showCancelButton: false,
                    confirmButtonText: "Aceptar",
                    closeOnConfirm: true
                }, function () {
                    image_object.parent().remove();
                });
            } else {
                errorAlert(response.message);
            }
        }
    });

}


function remove_caracteristica (caracteristica_object){

    var url = caracteristica_object.attr("href");
    $.ajax({
        url: url,
        type: "GET",
        dataType: "JSON",
        error: function(e){
            if (jgXHR.status == 422){
                modalErrors(JSON.parse(jgXHR.responseText));
            } else {
                errorAlert('!Ups, algo salio mal!');
            }
        },
        success: function(response){
            console.log(response);
            if (response.status == true) {
                caracteristica_object.parent().parent().remove();
                swal({
                    title: "¡Excelente!",
                    text: response.message,
                    type: "success",
                    showCancelButton: false,
                    confirmButtonText: "Aceptar",
                    closeOnConfirm: true
                });
            } else {
                errorAlert(response.message);
            }
        }
    });

}


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