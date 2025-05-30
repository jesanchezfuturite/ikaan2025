// var WINDOW_HEIGHT = 0;
// var WINDOW_WIDTH = 0;

var TYPE = "";
var conektaSuccessResponseHandler;
var conektaErrorResponseHandler;
var REQUEST = "";

$(document).ready(function () {

    Conekta.setPublicKey('key_O9RxkqysxXyVcQNExXqNH5g');

    //Slider superior
    $('.slider_top').bxSlider({
        captions: false,
        auto: true,
        pager: true,
        controls: false,
        pause: 3000,
        randomStart: true,
        touchEnabled: false,
    });

    //Slider para cada habitacion
    $('.room .slider_room').bxSlider({
        captions: false,
        auto: false,
        pager: true,
        controls: true,
        pause: 3000,
        randomStart: false,
        touchEnabled: true,
    });


    $(this).on("click", ".forma_pago .forma_pago_button", function (e) {
        $(".forma_pago .forma_pago_button").removeClass("active");
        var type = $(this).attr("type");
        open_form(type);
    });


    //FORM debito_credito_form
    $(this).on("submit", "#debito_credito_form", function (e) {
        e.preventDefault();

        $("input[name='tipo_pago']").val(TYPE);

        //Primero validamos los campos
        var data = new FormData(this);

        set_block_form(true);

        $.ajax({
            url: "validate_fields",
            type: "POST",
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            error: function (e) {
                set_block_form(false);
                modalErrors(JSON.parse(e.responseText));
            },
            success: function (result) {
                console.log(result);

                REQUEST = result;

                if(REQUEST.tipo_pago == "debito_credito"){

                    var tokenParams = {
                        "card": {
                            "number": REQUEST.numero_de_tarjeta_de_credito,
                            "name": REQUEST.nombre_del_tarjetahabiente,
                            "exp_year": REQUEST.exp_anio,
                            "exp_month": REQUEST.exp_mes,
                            "cvc": REQUEST.cvc,
                        }
                    };

                    Conekta.Token.create(tokenParams, conektaSuccessResponseHandler, conektaErrorResponseHandler);

                }else{
                    save_reservation(REQUEST);
                }

            }
        });

    });


    open_form("debito_credito");

});


function open_form(type) {

    TYPE = type;

    //Escondemos todos los formularios
    $(".dinamic_form").hide();

    $(".forma_pago_button[type='"+type+"']").addClass("active");
    $(".dinamic_form[form_type='"+type+"']").show();

}


function modalErrors(errorsArray) {
    var message;

    message = "<p>Haz cometido los siguientes errores:</p><ul>";

    for(var k in errorsArray.errors){
        swal("Mensaje", errorsArray.errors[k][0], "error");
        return;
    }

}


conektaSuccessResponseHandler = function(token) {
    console.log("SUCCESS CONEKTA");
    REQUEST.token_id = token.id;
    save_reservation(REQUEST);
};


conektaErrorResponseHandler = function(response) {
    set_block_form(false);
    swal("Mensaje", response.message_to_purchaser, "error");
};


function save_reservation(REQUEST) {

    console.log("SAVE RESERVATION");
    console.log(REQUEST);

    $.ajax({
        url: "process_payment",
        type: "POST",
        dataType: "JSON",
        data: REQUEST,
        error: function (e) {
            set_block_form(false);
            modalErrors(JSON.parse(e.responseText));
        },
        success: function (result) {
            console.log(result);

            if(!result.error){
                window.location.href = result.message;
            }else{
                set_block_form(false);
                swal("Mensaje", result.message, "error");
            }

        }
    });

}


function set_block_form(disabled) {

    if( disabled ){
        $("#debito_credito_form input, #debito_credito_form button").prop("disabled", true);
        $("#debito_credito_form .confirmar_pago").addClass("disabled");
    }else{
        $("#debito_credito_form input, #debito_credito_form button").prop("disabled", false);
        $("#debito_credito_form .confirmar_pago").removeClass("disabled");
    }

}







