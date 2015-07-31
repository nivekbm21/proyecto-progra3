var app = {
	init : function(){
		app.jsonSlider();
		app.jsonServicios();
		app.jsonAcerca();
	},
	jsonSlider : function() {
		$.getJSON('./common/GETSlider.php', function(data) {
			if (data) {
				console.log('if');
				for (var i = 0; i < data.length; i++) {
					if (i==0) {
						$('#slider_contenedor_imagen').append('<div class="item active"><img src="'+data[i].ruta+'" alt="'+data[i].nombre+'"><div class="carousel-caption"><h3>'+data[i].nombre+'</h3></div></div>').fadeIn("slow");
					}
					else{	
						$('#slider_contenedor_imagen').append('<div class="item"><img src="'+data[i].ruta+'" alt="'+data[i].nombre+'"><div class="carousel-caption"><h3>'+data[i].nombre+'</h3></div></div>').fadeIn("slow");
					};					
				};
			} 
			else{
				$('#slider_contenedor_imagen').append('<div class="info"><p>No Hay imagenes Disponibles</p></div>');
			};

		});

	},
	jsonServicios : function() {
		$.getJSON('./common/GETServicios.php', function(data1) {
			if (data1) {
				console.log('if');
				for (var i = 0; i < data1.length; i++) {
					$('#Servicios').append('<div class="row"><div class="col-sm-8"><h3>'+data1[i].titulo+'</h3><p>'+data1[i].contenido+'</p></div><div class="col-sm-4"><img src="'+data1[i].imagen+'" class="img-responsive" alt="image"></div></div>').fadeIn("slow");
				};
			} 
			else{
				$('#Servicios').append('<p>No Hay Servicios</p>');
			};			
		});

	},
	jsonAcerca : function() {
		$.getJSON('./common/GETacerca_nosotros.php', function(data) {
			if (data) {
				console.log('if');
				for (var i = 0; i < data.length; i++) {
					if (data[i].tipo=='l') {
						$('#acerca-largo').append('<h1>'+data[i].titulo+'</h1><p>'+data[i].contenido+'</p>').fadeIn("slow");
					}
					else{
						if (data[i].simbolo==1) {
							$('#acerca-corto').append('<div class="col-sm-4"><div class="panel panel-default text-center"><div class="panel-body"><span class="glyphicon glyphicon-ok"></span><h4>'+data[i].titulo+'</h4><p>'+data[i].contenido+'</p></div></div></div>').fadeIn("slow");
						}
						else if (data[i].simbolo==2) {
							$('#acerca-corto').append('<div class="col-sm-4"><div class="panel panel-default text-center"><div class="panel-body"><span class="glyphicon glyphicon-star"></span><h4>'+data[i].titulo+'</h4><p>'+data[i].contenido+'</p></div></div></div>').fadeIn("slow");

						}
						else {
							$('#acerca-corto').append('<div class="col-sm-4"><div class="panel panel-default text-center"><div class="panel-body"><span class="glyphicon glyphicon-play-circle"></span><h4>'+data[i].titulo+'</h4><p>'+data[i].contenido+'</p></div></div></div>').fadeIn("slow");

						};
					};					
				};
			} 
			else{
				$('#acerca-largo').append('<p>No Hay informacion Disponibles</p>');
			};
		});
	}
};

$(document).ready(
	function () {
		app.init();
	}
);