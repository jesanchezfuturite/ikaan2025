$(document).ready(function() {

 

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
				bootbox.dialog({
					message : "Experimentamos fallas técnicas por favor Intentelo más tarde",
					buttons : {
						aceptar : {
							label    : "Aceptar",
							callback : function() {
								bootbox.hideAll();
							}
						}
					}
				});
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
										window.location = asset() + "sistema/usuarios";
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



 