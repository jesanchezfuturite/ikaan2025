$(document).ready(function () {
    $('form', this).on('submit', function (e) {
        e.preventDefault();
        
        var data = new FormData(this);

        if( $('#fecha_disponibilidad').length > 0 ){
            data.append("fecha_disponibilidad", $('#fecha_disponibilidad').multiDatesPicker('getDates'));
        }

        var url = $(this).attr('action');

        fetchData(url, data).done(function (response) {
            console.log(data);
            if (response.status == true) {
                swal({
                    title: "¡Excelente!",
                    text: response.message,
                    type: "success",
                    showCancelButton: false,
                    confirmButtonText: "Aceptar",
                    closeOnConfirm: false
                }, function () {
                    window.location = response.url;
                });
            } else {
                errorAlert(response.message);
            }

        }).fail(function (jgXHR) {

            if (jgXHR.status == 422)
            {
                modalErrors(JSON.parse(jgXHR.responseText));
            }
            else
            {
                errorAlert('!Ups, algo salio mal!');
            }
        });
    });
});