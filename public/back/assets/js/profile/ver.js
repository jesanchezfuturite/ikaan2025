$(document).ready(function () {

    getData();

});


function getData() {
    var id = $("#id").val();
    var data = {};
    data.id = id;

    $.ajax({
        url: asset()+"system/profile/getData",
        type: "GET",
        dataType: "JSON",
        data: data,
        beforeSend : function() {
            blockForm();
        },
        error: function (jgXHR, ajaxOptions, throwError) {
            //Se desbloquea el formulario
            unblockForm();
            // openModal('Experimentamos fallas técnicas, por favor comuniquese con su proveedor', false);
            if (jgXHR.status == 422) {
                modalErrors(JSON.parse(jgXHR.responseText));
            } else {
                errorAlert('Experimentamos fallas técnicas, intentelo más tarde.');
            }

        },
        success: function (result) {
            $("#nombre").val(result.name);
            var permisos = result.permits;
            permisos = permisos.replace("{", "");
            permisos = permisos.replace("}", "");
            //permisos = permisos.replace('"',"");
            permisos = permisos.split(",");
            for (var i = 0; i < permisos.length; i++) {
                permisos[i] = permisos[i].split(":");
                permisos[i][0] = permisos[i][0].replace('"', "");
                permisos[i][0] = permisos[i][0].replace('"', "");

            }
            for (var i = 0; i < permisos.length; i++) {
                //console.log(permisos[i][0]);
                checkInputs(permisos[i][0], permisos[i][1]);

            }

            blockForm();
            $(".back_button").attr('disabled', false);
            //console.log(permisos);

        }

    });


}


function checkInputs(id, permisos) {


    if (permisos == 1) { // vista

        $('.read-' + id).prop('checked', true);

    } else if (permisos == 3) { //vista - alta

        $('.read-' + id).prop('checked', true);

        $('.create-' + id).prop('checked', true);

    } else if (permisos == 5) { //vista - cambios

        $('.read-' + id).prop('checked', true);

        $('.update-' + id).prop('checked', true);

    } else if (permisos == 9) {//vista - baja

        $('.read-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

    }


    else if (permisos == 2) {//vista - baja

        $('.create-' + id).prop('checked', true);

    }

    else if (permisos == 4) {//vista - baja

        $('.update-' + id).prop('checked', true);

    }

    else if (permisos == 6) { //alta - cambios

        $('.create-' + id).prop('checked', true);

        $('.update-' + id).prop('checked', true);

    } else if (permisos == 10) { //alta - baja

        $('.create-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

    }

    else if (permisos == 12) { //cambios - baja

        $('.update-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

    }

    else if (permisos == 8) { //cambios - baja

        $('.delete-' + id).prop('checked', true);

    }

    else if (permisos == 7) { //vista - alta - cambios

        $('.read-' + id).prop('checked', true);

        $('.create-' + id).prop('checked', true);

        $('.update-' + id).prop('checked', true);

    }

    else if (permisos == 11) { //vista - alta - baja

        $('.read-' + id).prop('checked', true);

        $('.create-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

    }

    else if (permisos == 13) { //vista - cambios - baja

        $('.read-' + id).prop('checked', true);

        $('.update-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

    }

    else if (permisos == 15) { //vista - create - baja - cambios

        $('.read-' + id).prop('checked', true);

        $('.create-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

        $('.update-' + id).prop('checked', true);

    }

    else if (permisos == 14) { //create - baja - cambios

        $('.create-' + id).prop('checked', true);

        $('.delete-' + id).prop('checked', true);

        $('.update-' + id).prop('checked', true);

    }


    $('.update#2').prop('checked', true);

}
