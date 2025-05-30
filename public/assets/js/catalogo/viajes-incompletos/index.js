$(document).ready(function () {

    /** Delete element */
    $(this).on('click', '.btnDelete-trip', function (e) {
        e.preventDefault();

        var element = $(this).attr('code');

        bootbox.confirm("¿Desea eliminar el elemento " + element + "?", function (result) {

            if (result == true){
                var data = {};
                data.code = element;
                $.ajax({
                    type       : 'GET',
                    dataType   : 'json',
                    data: data,
                    url        : asset() + "catalogo/viajes-no-completos/delete-trip",
                    error      : function (jqXHR) {
                        console.log(jqXHR);
                    },
                    success    : function (response) {
                        unblockForm();

                        console.log(response);

                        if (!response.error){

                            bootbox.alert("Se ha eliminado con éxito el elemento, se ha notificado al usuario", function () {
                                window.location.reload();
                            });

                        }else{

                            bootbox.alert(response.message, function () {
                            });

                        }
                    },
                });
            }

        });

    });


    $(this).on('click', '.btnAgendar-trip', function (e) {
        e.preventDefault();

        var element = $(this).attr('code');

        bootbox.confirm("¿Deseas terminar la busqueda de servicios similares para la ruta seleccionada? (se agendará a cada día una fecha, por lo cual tendrás que brindar el servicio pudiendo ser un solo pasajero por ruta)", function (result) {

            if (result == true){
                var data = {};
                data.code = element;
                $.ajax({
                    type       : 'GET',
                    dataType   : 'json',
                    data: data,
                    url        : asset() + "catalogo/viajes-no-completos/asignar-trip",
                    error      : function (jqXHR) {
                        console.log(jqXHR);
                    },
                    success    : function (response) {
                        unblockForm();

                        console.log(response);

                        if (!response.error){

                            bootbox.alert("La ruta seleccionada se ha puesto lista para realizar el servicio", function () {
                                window.location.reload();
                            });

                        }else{

                            bootbox.alert(response.message, function () {
                            });

                        }
                    },
                });
            }

        });

    });



});