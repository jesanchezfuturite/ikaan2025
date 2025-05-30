$(document).ready(function () {});

function callCalendar() {
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3C;Ant',
        nextText: 'Sig&#x3E;',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
            'Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    

    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $(".datepicker").datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        maxMonth:1,
        firstDay: 1,
      onClose: function( selectedDate ) {
        $( "#datepicker2" ).datepicker( "option", "minDate", selectedDate );
      }
    });

    $(".datepicker2").datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        maxMonth:1,
        firstDay: 1,
      onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
}



function initMap() {

	var maps = new GMaps({
	  div: '#mapa_cotizacion',
	  lat: 25.49855,
	  lng:	-100.15079,
	  zoom: 9
	});
	
	/*1 vasconcelos*/
	maps.addMarker({
	  lat: 25.247051,
	  lng: -99.952201,
	  title: 'ikaan',
	  icon: "assets/img/maps.png",
	  /*click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/vasconcelos-min.jpg" class="img-responsive" />');
	  }*/
	});
}