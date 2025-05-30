$(document).ready(function() {

 
 	$(this).on("click", ".bajar", function(e){
 		e.preventDefault();

 		var current = $(this).attr("current");
 		var id = $(this).attr("id");

 		var data = {};
 		data.current = current;
		data.id = id;
 		$.ajax({
 			url: asset() + "catalogos/categorias/bajar",
 			type: "POST",
 			dataType: "JSON",
 			data: data,
 			error: function(e){
 				console.log(e);
 			},
 			success: function(result){
 				console.log(result);
 				location.reload();
 			}
 		});

 	});


 	$(this).on("click", ".subir", function(e){
 		e.preventDefault();

 		var current = $(this).attr("current");
 		var id = $(this).attr("id");

 		var data = {};
 		data.current = current;
		data.id = id;
 		$.ajax({
 			url: asset() + "catalogos/categorias/subir",
 			type: "POST",
 			dataType: "JSON",
 			data: data,
 			error: function(e){
 				console.log(e);
 			},
 			success: function(result){
 				console.log(result);
 				location.reload();
 			}
 		});

 	});


 	$(this).on("click", ".borrar_order", function(e){
 		e.preventDefault();

 		var current = $(this).attr("current");
 		var id = $(this).attr("id");

 		var data = {};
 		data.current = current;
		data.id = id;
 		$.ajax({
 			url: $(this).attr("href"),
 			type: "GET",
 			dataType: "JSON",
 			data: data,
 			error: function(e){
 				console.log(e);
 			},
 			success: function(result){
 				console.log(result);
 				location.reload();
 			}
 		});

 	});


});



 