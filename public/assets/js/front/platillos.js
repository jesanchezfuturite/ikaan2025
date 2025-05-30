
var current_day_selected = 0;
$(document).ready(function () {


    $(this).on("click", ".table_alimentos .header_day", function (e) {
        e.preventDefault();

        current_day_selected = $(this).attr("day_selected");

        $(".header_day").removeClass("open");

        $(".table_alimentos .menu").not(".menu[day_selected='"+current_day_selected+"']").slideUp();

        if( $(this).parent().find(".menu").css("display") == "none" ){
            $(this).parent().find(".menu").slideDown(200);
            $(this).addClass("open");
        }else{
            $(this).parent().find(".menu").slideUp(200);
        }

    });


    $(this).on("submit", "#table_alimentos", function (e) {
        e.preventDefault();

        var data = new FormData(this);

        $.ajax({
            url: "../save_food",
            type: "POST",
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            error: function (e) {
                modalErrors(JSON.parse(e.responseText));
            },
            success: function (result) {
                console.log(result);

                if(!result.error){
                    swal("Mensaje", result.message, "success");
                    setTimeout(function () {
                        window.location.href = result.url;
                    }, 5000);
                }else{
                    swal("Mensaje", result.message, "error");
                }

            }
        });

    });


});




function modalErrors(errorsArray) {
    var message;

    message = "<p>Haz cometido los siguientes errores:</p><ul>";

    for(var k in errorsArray.errors){
        swal("Mensaje", errorsArray.errors[k][0], "error");
        return;
    }

}