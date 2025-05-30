$(document).ready(function() {

	getRecords();

	//Se le da función al boton de borrar
	$(this).on('click', '.btnDelete', function(e) {

		e.preventDefault();

		//Se pregunta antes de borrar el elemento
		var params = {
			nombre : $(this).attr('data-name'),
			url    : $(this).attr('href')
		};

		bootbox.dialog({
			message : "¿Desea eliminar al cliente "+params.nombre+"?",
			title   : "Eliminación de cliente",
			buttons : {
				aceptar  : {
					label     : "Aceptar",
					className : "btn-primary",
					callback  : function() {
						$.ajax({
							type     : 'GET',
							url      : params.url,
							dataType : 'json',
							error    : function() {
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
								bootbox.dialog({
									message : response.mensaje,
									title   : "Eliminar cliente",
									buttons : {
										aceptar : {
											label    : "Aceptar",
											callback : function() {
												bootbox.hideAll();
												getRecords();
											}
										}
									}
								});
							}
						});
					}
				},
				cancelar : {
					label     : "Cancelar",
					className : "btn-danger",
					callback  : function() {
						$('.modal-dialog').modal('hide');
					}
				}
			}
		});
		/*$('.modal-body').html('<p>¿Desea borrar el cliente '+$(this).attr('data-name')+'</p>');
		$('#myModal').modal('show');

		var ruta = $(this).attr('url');

		//Se le da acción al boton aceptar del modal
		$('#modalBtnAccion').click(function(e) {

			e.preventDefault();

			$.ajax({
				type       : 'get',
				dataType   : 'json',
				url        : ruta,
				beforeSend : function() {},
				error      : function(xhr, ajaxOption, throwError) {},
				success    : function() {}
			});

		});*/

	});

});


/*
function getRecords()
{
	var recordsTable = $('#tableUser').dataTable({
								'bProcessing' : true,
								'bServerSide' : true,
								'bDestroy'    : true,
								'oLanguage'   : {
									'sLengthMenu'   : 'Mostrar _MENU_ resultado',
									'sZeroRecords'  : 'No se encontraron resultados',
									'sInfo'         : '<strong>Total:</strong>  _TOTAL_ resultados',
									'sInfoEmpty'    : '0 resultados',
									'sInfoFiltered' : '',
									'sSearch'       : 'Buscar',
									'oPaginate'     : {
											'sNext'     : 'Siguiente',
											'sPrevious' : 'Anterior'
									},
									'sProcessing'   : 'Cargando...'
								},
								'fixedHeader': {
								    'header': 'true',
								},
								'sAjaxSource' : asset() + 'sistema/usuarios/table',
								'aoColumns'   : [
									{'sClass': 'center', 'bSortable': false},   //No.
									{'sClass': 'center', 'bSortable': false},   //No.
									{'sClass': 'center', 'bSortable': false},   //No.
									{'sClass': 'center', 'bSortable': false},   //No.
									{'sClass': 'center', 'bSortable': false}	//Acciones
								],
								'aaSorting'   : [[1, 'DESC']]
					   });
}*/