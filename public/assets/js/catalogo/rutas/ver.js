var map = null;
var PERSON_MARKER = {
    url: asset_public() + "assets/img/human.png",
    scaledSize: new google.maps.Size(8, 20)
};
var ORIGEN_MARKER = {
    url:  asset_public() + "assets/img/pp.png",
    scaledSize: new google.maps.Size(33, 40)
};
var DESTINY_MARKER = {
    url:  asset_public() + "assets/img/pd.png",
    scaledSize: new google.maps.Size(33, 40)
};
var MARKERS_ON_ROUTE = new Array();


$(document).ready(function() {


	var data = {};
	data.route_id = $("input[name='id']").val();
	$.ajax({
		url: asset() + "catalogo/rutas/get-route",
		type: "POST",
		dataType: "JSON",
		data: data,
		error: function(e){
			console.log(e);
		},
		success: function(result){

			console.log(result);
			drawMap(result);

		}
	});


});


var bounds = new google.maps.LatLngBounds();
function drawMap(result){

    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 25.679055, lng: -100.319583},
        zoom: 16,
        disableDefaultUI: true,
        clickableIcons: false,
    });

    for( var i = 0; i < result.length; i++ ){

        //MARCADOR DE ORIGEN
        MARKERS_ON_ROUTE.push(new google.maps.Marker({
            position: {lat: result[i]["origen"]["lat"], lng: result[i]["origen"]["lon"]},
            map: map,
            order: result[i]["user_id"]+"_o",
            type: "origen",
            icon: PERSON_MARKER
        }));
        bounds.extend(new google.maps.LatLng(result[i]["origen"]["lat"], result[i]["origen"]["lon"]));


        //MARCADOR DE DESTINO
        MARKERS_ON_ROUTE.push(new google.maps.Marker({
            position: {lat: result[i]["destino"]["lat"], lng: result[i]["destino"]["lon"]},
            map: map,
            order: result[i]["user_id"]+"_d",
            type: "destino",
            icon: PERSON_MARKER
        }));
        bounds.extend(new google.maps.LatLng(result[i]["destino"]["lat"], result[i]["destino"]["lon"]));

    }

    map.fitBounds(bounds);

    /*
    //Dibujamos la ruta
    var directionsService = new google.maps.DirectionsService();
    directionDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
    directionDisplay.setMap(map);

    var waypoints = [];

    for (var i = 0; i < result["waypoints"].length; i++) {
        waypoints.push({
            location: {lat: result["waypoints"][i]["lat"], lng: result["waypoints"][i]["lon"]},
            stopover: true,
        });
    }


    var request = {
        origin: 		{lat: result["trip_origen"]["lat"], lng: result["trip_origen"]["lon"]},			//Marcamos el origen de la ruta
        destination: 	{lat: result["trip_destino"]["lat"], lng: result["trip_destino"]["lon"]},      	//Marcamos el destino de la ruta
        waypoints: waypoints,
        unitSystem: google.maps.UnitSystem.IMPERIAL,
        travelMode: google.maps.TravelMode.DRIVING,
        avoidTolls: true,
        optimizeWaypoints: true,
    };


    //Colocamos los marcadores personalizados
    MARKERS_ON_ROUTE.push(new google.maps.Marker({
        position: {lat: result["trip_origen"]["lat"], lng: result["trip_origen"]["lon"]},
        map: map,
        order: result["trip_origen"]["order"],
        type: result["trip_origen"]["type"],
        icon: PERSON_MARKER
    }));
    MARKERS_ON_ROUTE.push(new google.maps.Marker({
        position: {lat: result["trip_destino"]["lat"], lng: result["trip_destino"]["lon"]},
        map: map,
        order: result["trip_destino"]["order"],
        type: result["trip_destino"]["type"],
        icon: PERSON_MARKER
    }));

    for (i = 0; i < result["waypoints"].length; i++) {
        MARKERS_ON_ROUTE.push(new google.maps.Marker({
            position: {lat: result["waypoints"][i]["lat"], lng: result["waypoints"][i]["lon"]},
            map: map,
            order: result["waypoints"][i]["order"],
            type: result["waypoints"][i]["type"],
            icon: PERSON_MARKER
        }));
    }


    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionDisplay.setDirections(response);
            markerCurrentPassengerOriginDestiny(1);
        } else {
            // alert an error message when the route could nog be calculated.
            if (status == 'ZERO_RESULTS') {
                alert('No route could be found between the origin and destination.');
            } else if (status == 'UNKNOWN_ERROR') {
                alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');
            } else if (status == 'REQUEST_DENIED') {
                alert('This webpage is not allowed to use the directions service.');
            } else if (status == 'OVER_QUERY_LIMIT') {
                alert('The webpage has gone over the requests limit in too short a period of time.');
            } else if (status == 'NOT_FOUND') {
                alert('At least one of the origin, destination, or waypoints could not be geocoded.');
            } else if (status == 'INVALID_REQUEST') {
                alert('The DirectionsRequest provided was invalid.');
            } else {
                alert("There was an unknown error in your request. Requeststatus: nn" + status);
            }
        }
    });
    */

}


function markerCurrentPassengerOriginDestiny(number_passenger) {

    for(var i = 0; i < MARKERS_ON_ROUTE.length; i++){
        //alert(MARKERS_ON_ROUTE[i].order);
        MARKERS_ON_ROUTE[i].setIcon(PERSON_MARKER);
    }

    for(var i = 0; i < MARKERS_ON_ROUTE.length; i++){

        if( MARKERS_ON_ROUTE[i].order == number_passenger+"_o" || MARKERS_ON_ROUTE[i].order == number_passenger+"_d" ){
            if( MARKERS_ON_ROUTE[i].type == "origen" ){
                MARKERS_ON_ROUTE[i].setIcon(ORIGEN_MARKER);
            }else{
                MARKERS_ON_ROUTE[i].setIcon(DESTINY_MARKER);
            }
        }
    }

}




