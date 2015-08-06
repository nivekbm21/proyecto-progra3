var app = {
	init : function(){
		app.jsonSlider();
		app.jsonServicios();
		app.jsonAcerca();
		app.jsonPreguntas();
	},
	jsonSlider : function() {
		$.getJSON('./common/GETSlider.php', function(data) {
			if (data) {
				console.log('if');
				for (var i = 0; i < data.length; i++) {
					if (i==0) {
						$('#slider_contenedor_imagen').append('<div class="item active"><img src="'+data[i].ruta+'" alt="'+data[i].nombre+'"><div class="carousel-caption"><h3>'+data[i].nombre+'</h3></div></div>').fadeIn("fast");
					}
					else{	
						$('#slider_contenedor_imagen').append('<div class="item"><img src="'+data[i].ruta+'" alt="'+data[i].nombre+'"><div class="carousel-caption"><h3>'+data[i].nombre+'</h3></div></div>').fadeIn("fast");
					};					
				};
			} 
			else{
				$('#slider_contenedor_imagen').append('<div class="info"><p>No Hay imagenes Disponibles</p></div>');
			};

		});

	},jsonPreguntas : function() {
		$.getJSON('./common/GETPreguntas_frecuentes.php', function(data) {
			if (data) {
				console.log('if');
				for (var i = 0; i < data.length; i++) {
					if (i==0) {
						$('#accordion').append('<div class="panel panel-default"><div class="panel-heading"><div class="panel-title"><a href="#collapse-'+i+'" data-toggle="collapse" data-parent="#accordion">'+data[i].pregunta+'</a></div><!-- End panel title --><div id="collapse-'+i+'" class="panel-collapse collapse in"><div class="panel-body">'+data[i].respuesta+'</div></div><!-- End Panel collapse --></div></div>').fadeIn("fast");	
					}
					else{
						$('#accordion').append('<div class="panel panel-default"><div class="panel-heading"><div class="panel-title"><a href="#collapse-'+i+'" data-toggle="collapse" data-parent="#accordion">'+data[i].pregunta+'</a></div><!-- End panel title --><div id="collapse-'+i+'" class="panel-collapse collapse"><div class="panel-body">'+data[i].respuesta+'</div></div><!-- End Panel collapse --></div></div>').fadeIn("fast");	

					}
				};
			} 
			else{
				$('#accordion').append('<div class="info"><p>No Hay Preguntas Disponibles</p></div>');
			};

		});

	},
	jsonServicios : function() {
		$.getJSON('./common/GETServicios.php', function(data1) {
			if (data1) {
				console.log('if');
				for (var i = 0; i < data1.length; i++) {
					$('#Servicios').append('<div class="row"><div class="col-sm-8"><h3>'+data1[i].titulo+'</h3><p>'+data1[i].contenido+'</p></div><div class="col-sm-4"><img src="'+data1[i].imagen+'" class="img-responsive" alt="image"></div></div><hr>').fadeIn("fast");
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
						$('#acerca-largo').append('<h1>'+data[i].titulo+'</h1><p>'+data[i].contenido+'</p>').fadeIn("fast");
					}
					else{
						if (data[i].simbolo==1) {
							$('#acerca-corto').append('<div class="col-sm-4"><div class="panel panel-default text-center"><div class="panel-body"><span class="glyphicon glyphicon-ok"></span><h4>'+data[i].titulo+'</h4><p>'+data[i].contenido+'</p></div></div></div>').fadeIn("fast");
						}
						else if (data[i].simbolo==2) {
							$('#acerca-corto').append('<div class="col-sm-4"><div class="panel panel-default text-center"><div class="panel-body"><span class="glyphicon glyphicon-star"></span><h4>'+data[i].titulo+'</h4><p>'+data[i].contenido+'</p></div></div></div>').fadeIn("fast");

						}
						else {
							$('#acerca-corto').append('<div class="col-sm-4"><div class="panel panel-default text-center"><div class="panel-body"><span class="glyphicon glyphicon-play-circle"></span><h4>'+data[i].titulo+'</h4><p>'+data[i].contenido+'</p></div></div></div>').fadeIn("fast");

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