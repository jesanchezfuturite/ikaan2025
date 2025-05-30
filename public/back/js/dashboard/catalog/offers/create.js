
$(document).ready(function () {

    $( "input[name='date_start_deal']").datepicker({ dateFormat: 'dd/mm/yy' });
    $( "input[name='date_finish_deal']").datepicker({ dateFormat: 'dd/mm/yy' });

    $(this).on("change", "select[name='type']", function () {

        change_type($(this).val());

    });

    change_type("reservacion");

});


function change_type(type) {

    // reservacion
    // amenidades

    if( type == "reservacion" ){
        $("#reservacion").show();
        $("#amenidades").hide();
    }else{
        $("#reservacion").hide();
        $("#amenidades").show();
    }

}