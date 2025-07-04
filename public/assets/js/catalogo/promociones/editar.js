var residentes_option = "";

$(document).ready(function() {
 
	$("input[name='vigencia_de_promocion']").datepicker({ dateFormat: 'dd-mm-yy' });

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
										window.location = asset() + "catalogo/promociones";
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

 





 