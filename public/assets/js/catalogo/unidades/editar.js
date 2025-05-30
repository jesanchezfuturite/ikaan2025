var residentes_option = "";

$(document).ready(function() {
 
	getResidentes();

	$(this).on('submit', 'form', function(e) {

		e.preventDefault();

		$.ajax({
			type     : 'POST',
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			url      : $(this).attr("action"),
			dataType : 'JSON',
			error    : function(e) {
				console.log(e);
				unblockForm();

				if (e.status == 422)
				{
					displayErrors( JSON.parse(e.responseText) );
				}
				else
				{
					displayMessage("Experimentamos fallas técnicas, intentelo más tarde.");
				}

			},
			success  : function(response) {

				console.log(response);
				if(response.estatus){
					bootbox.dialog({
						message : "Se ha editado con éxito el registro.",
						title   : "Edición de registro",
						buttons : {
							aceptar : {
								label    : "Aceptar",
								callback : function() {
									bootbox.hideAll();
										window.location = asset() + "catalogo/unidades";
									}
							}
						}
					});
				}else{
					displayErrors(response.errors);
				}

			}

		});

	});

});

function getResidentes(){

	$.ajax({
		url: asset() + "catalogo/unidades/getResidentes",
		type: "POST",
		dataType: "JSON",
		async: false,
		error: function(e){
			console.log(e);
		},
		success: function(result){
			residentes_option = result;
		}
	});

}


function add_residente(){

	var html = "";

    html += '<div class="row">';
    html += '    <div class="form-group col-md-10">';
    html += '        <select class="form-control" name="residente[]">';
    html += 			residentes_option;
    html += '        </select>';
    html += '    </div>';
    html += '    <div class="form-group col-md-2">';
    html += '        <a class="btn btn-danger" onclick="$(this).parent().parent().remove();">x</a>';
    html += '    </div>';
    html += '</div>';

	$("#residentes").append(html);

}
 






 