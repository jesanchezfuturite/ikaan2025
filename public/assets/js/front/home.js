// var WINDOW_HEIGHT = 0;
// var WINDOW_WIDTH = 0;

$(document).ready(function () {

    $(".content_reservation .content_dates input[type='text']").datepicker({ minDate: 1, dateFormat: 'dd/mm/yy' });

    //Slider principal superior
    $('.slider_top').bxSlider({
        // mode: 'slide',
        captions: false,
        auto: true,
        pager: true,
        controls: false,
        pause: 3000,
        randomStart: true,
        touchEnabled: false,
    });

    $(this).on("change", "input[name='fecha_entrada']", function (e) {
        var fecha_entrada = $("input[name='fecha_entrada']").val();
        fecha_entrada = fecha_entrada.split("/");
        fecha_entrada = new Date(fecha_entrada[2], fecha_entrada[1] - 1, fecha_entrada[0])

        var dd = fecha_entrada.getDate() + 1;
        var mm = fecha_entrada.getMonth();
        var y = fecha_entrada.getFullYear();

        // console.log(y, mm, dd);

        $("input[name='fecha_salida']").datepicker( "option", "minDate", new Date(y, mm, dd) );
    });

    $(this).on("submit", "#choose_date", function (e) {

        // fecha_entrada
        // fecha_salida
        // numero_personas

        var fecha_entrada = $("input[name='fecha_entrada']");
        var fecha_salida = $("input[name='fecha_salida']");
        var numero_personas = $("input[name='numero_personas']");

        if(fecha_entrada.val() == ""){
            e.preventDefault();
            swal("Mensaje", "Ingresa una Fecha de entrada", "error");
        }else if(fecha_salida.val() == ""){
            e.preventDefault();
            swal("Mensaje", "Ingresa una Fecha de salida", "error");
        }else if(numero_personas.val() == ""){
            e.preventDefault();
            swal("Mensaje", "Ingresa un Número de personas", "error");
        }

    });

});
