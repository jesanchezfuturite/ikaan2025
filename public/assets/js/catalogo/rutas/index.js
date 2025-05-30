$(document).ready(function () {


    $("#table, .table").DataTable({
        "bFilter": true,
        "bSort": true,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No existen registros para mostrar",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No existen registros para mostrar",
            "infoFiltered": "(Filtrando de _MAX_ registros)",
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
            },
            "search": "Buscar"
        },
        "aoColumnDefs": [
            {'bSortable': false, 'aTargets': [0, 1, 2]}
        ]
    });


    $(this).on("click", ".btn-asignar-chofer", function (e) {
        e.preventDefault();


        var route_id = $(this).attr("route-id");

        var data = {};
        data.route_id = route_id;
        $.ajax({
            url: asset() + "catalogo/rutas/get-drivers",
            type: "POST",
            dataType: "JSON",
            data: data,
            error: function (e) {
                console.log(e);
            },
            success: function (result) {

                console.log(result);
                var html = "";

                html += '<div class="row">';
                html += '    <div class="form-group">';
                html += '        <label>Selecione el chofer para asignar a la ruta:</label>';
                html += '        '+result;
                html += '    </div>';
                html += '</div>';

                bootbox.confirm(html,
                    function (result) {
                        if(result){

                            //Asignamos el chofer a la ruta
                            var chofer_id = $("select[name='chofer_asignar']").val();
                            var data = {};
                            data.chofer_id = chofer_id;
                            data.route_id = route_id;
                            $.ajax({
                                url: asset() + "catalogo/rutas/asignar-chofer-ruta",
                                type: "POST",
                                dataType: "JSON",
                                data: data,
                                error: function (e) {
                                    console.log(e);

                                    bootbox.dialog({
                                        message : "Se ha asignado con éxito el chofer.",
                                        title   : "Asignación de chofer",
                                        buttons : {
                                            aceptar : {
                                                label    : "Aceptar",
                                                callback : function() {
                                                    bootbox.hideAll();
                                                    window.location = asset() + "catalogo/rutas";
                                                }
                                            }
                                        }
                                    });

                                },
                                success: function (result) {

                                    console.log(result);
                                    //if(result.status){

                                        bootbox.dialog({
                                            message : "Se ha asignado con éxito el chofer.",
                                            title   : "Asignación de chofer",
                                            buttons : {
                                                aceptar : {
                                                    label    : "Aceptar",
                                                    callback : function() {
                                                        bootbox.hideAll();
                                                        window.location = asset() + "catalogo/rutas";
                                                    }
                                                }
                                            }
                                        });

                                    //}else{
                                    //    displayErrors(result.errors);
                                    //}

                                }
                            });

                        }
                    }
                );

            }
        });



    });





});







 