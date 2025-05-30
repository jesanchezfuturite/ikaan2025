$(document).ready(function () {

	$(this).on('submit', 'form', function (e) {

		e.preventDefault();



		$.ajax({

			type       : 'POST',

			data       : $(this).serialize(),

			dataType   : 'json',

			url        : $(this).attr('action'),

			beforeSend : function () {

				blockForm();

			},

			error      : function (jqXHR) {

				unblockForm();



				if (jqXHR.status == 422)

				{

					displayErrors(jqXHR);

				}

				else

				{

					displayMessage("Experimentamos fallas técnicas, intentelo más tarde.");

				}

			},

			success    : function (response) {

				unblockForm();



				if (response.status == true)

				{

					bootbox.alert(response.message, function () {

						window.location = response.route;

					});

				}

				else

				{

					displayMessage(response.message);

				}

			}

		});

	});




	/** Delete element */

	$(this).on('click', '.btnDelete', function (e) {
		e.preventDefault();

		var route = $(this).attr('href');
		var element = $(this).attr('data-name');

		bootbox.confirm("¿Desea eliminar el elemento " + element + "?", function (result) {

			if (result == true)

			{

				$.ajax({
					type       : 'GET',
					dataType   : 'json',
					url        : route,
					beforeSend : function () {
						blockForm();
					},
					error      : function (jqXHR) {
						unblockForm();

						if (jqXHR.status == 422)
						{
							displayErrors(jqXHR);
						}
						else
						{
							displayMessage("Experimentamos fallas técnicas, intentelo más tarde.");
						}
					},
					success    : function (response) {
						unblockForm();

						console.log(response);

						if (response.status == true)
						{
							bootbox.alert("Se ha eliminado con éxito el elemento", function () {
								window.location.reload();
							});
						}
						else
						{
							displayMessage(response.errors);
						}
					},
				});

			}

		});

	});



	$("#table, .table").DataTable({

		"bFilter": true,

		"bSort" : false,

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

        }		

	});



});