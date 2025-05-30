var residentes_option = "";

$(document).ready(function() {

	$(this).on('submit', 'form', function(e) {

		e.preventDefault();
		$.ajax({
			type     : 'POST',
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			url      : asset() + "catalogo/operadores/alta",
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
						message : "Se ha guardado con éxito el registro.",
						title   : "Alta de registro",
						buttons : {
							aceptar : {
								label    : "Aceptar",
								callback : function() {
									bootbox.hideAll();
										window.location = asset() + "catalogo/operadores";
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

 