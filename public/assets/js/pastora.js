var prefix  = "dashboard";

var getUrl;

/**

 *

 *

 */

function formActions(block)

{

	$('input, select, button, a, textarea, checkbox').each(function () {

		$(this).attr('disabled', block);

	});

}



/**

 *

 *

 */

function blockForm()

{

	formActions(true);

}



/**

 *

 *

 */

function unblockForm()

{

	formActions(false);

}







 function displayMessage(){



 }





function ajax(params)

{

	console.log(params.cleanForm);



	var settings = {



		type       : (typeof params != 'undefined' && typeof params.type != 'undefined') ? params.type : 'post',

		dataType   : (typeof params != 'undefined' && typeof params.dataType != 'undefined') ? params.dataType : 'json',

		form       : (typeof params != 'undefined' && typeof params.form != 'undefined') ? params.form : 'form',

		beforeSend : (typeof params != 'undefined' && typeof params.beforeSend != 'undefined') ? params.beforeSend : false,

		error      : (typeof params != 'undefined' && typeof params.error != 'undefined') ? params.error : false,

		success    : (typeof params != 'undefined' && typeof params.success != 'undefined') ? params.success : false,

		cleanForm  : (typeof params != 'undefined' && typeof params.cleanForm != 'undefined') ? params.cleanForm : false



	}



	$.ajax({



		type       : settings.type,

		url        : $(settings.form).attr('action'),

		data       : $(settings.form).serialize(),

		dataType   : settings.dataType,

		beforeSend : function() {



			//blockForm(settings.form);



			//Se verifica si se tiene una funcion de callback

			if (typeof settings.beforeSend == "function") {



				settings.beforeSend();



			}



		},

		error      : function(xhr, ajaxOptions, throwError) {



			console.log("Error: "+xhr.status+' - '+throwError);



			//Se verifica si se tiene una funcion de callback

			if (typeof settings.error == "function") {



				settings.error();



			}



			//Se desbloquea el formulario

			unblockForm(settings.form);



			openModal('Experimentamos fallas técnicas, por favor comuniquese con su proveedor', false);



		},

		success    : function(response) {



			//Se debloquea el formulario

			unblockForm(settings.form, settings.cleanForm);



			if (settings.success === false) {



				(response.estatus === true) ? openModal(response.mensaje, false) : openModal(response.errors, true);



			} else {



				(response.estatus === true) ? openModal(response.mensaje, false, settings.success) : openModal(response.errors, true);



			}



		}



	});



}





function displayErrors(errors)

{

	var message;

	message = "<h4>¡Error!</h4><p>Haz cometido los siguientes errores:</p><ul>";



	for(var k in errors){

		message += "<li>" + errors[k] + "</li>";

	}



	message += "</ul>";

	displayMessage(message);

}



function openModal(text, arrayType, closeCallbackFunction)

{

	if (arrayType == false) {



		$('.modal-body').html('<p>'+ text +'</p>');



	} else {



		var contenido = "<ul>";



		$.each(text, function(i, item) {



			contenido = contenido + "<li>" + item + "</item>";



		});



		//Se cierra la lista

		contenido = contenido + "</ul>";



		$('.modal-body').html('<p>Se ha encontrado los siguientes errores: </p>' + contenido);



	}



	//Se muestra el modal

	$('#myModal').modal('show');



	//Se le da acción al boton errar

	$('#modalBtnAccion').click(function(e) {



		e.preventDefault();



		if (typeof closeCallbackFunction == "undefined") {



			$('#myModal').modal('hide');



		} else if (typeof closeCallbackFunction == "function") {



			closeCallbackFunction();



		}



	});

}



function displayMessage(message)

{

	bootbox.alert(message, function () {});

}







// http://localhost/urban-club/ADMINISTRADOR/public/dashboard/sistema/perfil/editar/Mg==

function asset_public()

{

	return "http://" + document.location.hostname + "/eddu/public/cms/";

}



function asset()

{

	return "http://" + document.location.hostname + "/eddu/public/cms/" + prefix +  "/";

}
