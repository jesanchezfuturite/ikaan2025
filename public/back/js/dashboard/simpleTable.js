$(document).ready(function () {
    $('#simpletable').DataTable({
        'language': {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

    $(this).on('click', '.btn-delete', function (e) {
        e.preventDefault();

        var route = $(this).attr('href');
        var message_used = "";

        if( $(this).attr("is-used") ){
            message_used = $(this).attr("message-used");
        }

        swal({
            title: '¿Estas seguro?',
            text: '¿Deseas eliminar el elemento?' + "<br>" + message_used,
            type: 'warning',
            html: true,
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sí, borralo",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type: 'get',
                url: route,
                dataType: 'json',
                beforeSend: function () {
                    blockForm();
                },
                error: function () {
                    unblockForm();

                    errorAlert('Experimentamos fallas técnicas, intentelo más tarde.');
                },
                success: function (response) {
                    unblockForm();

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
                }
            });
        });
    });
});
