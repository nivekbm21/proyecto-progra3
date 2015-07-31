var app = {
	init : function(){
		app.jsonPreguntas();
	},
	jsonPreguntas : function() {
		$.getJSON('./common/GETPreguntas_frecuentes.php', function(data) {
			if (data) {
				console.log('if');
				for (var i = 0; i < data.length; i++) {
					if (i==0) {
						$('#accordion').append('<div class="panel panel-default"><div class="panel-heading"><div class="panel-title"><a href="#collapse-'+i+'" data-toggle="collapse" data-parent="#accordion">'+data[i].pregunta+'</a></div><!-- End panel title --><div id="collapse-'+i+'" class="panel-collapse collapse in"><div class="panel-body">'+data[i].respuesta+'</div></div><!-- End Panel collapse --></div></div>').fadeIn("slow");	
					}
					else{
						$('#accordion').append('<div class="panel panel-default"><div class="panel-heading"><div class="panel-title"><a href="#collapse-'+i+'" data-toggle="collapse" data-parent="#accordion">'+data[i].pregunta+'</a></div><!-- End panel title --><div id="collapse-'+i+'" class="panel-collapse collapse"><div class="panel-body">'+data[i].respuesta+'</div></div><!-- End Panel collapse --></div></div>').fadeIn("slow");	

					}
				};
			} 
			else{
				$('#accordion').append('<div class="info"><p>No Hay Preguntas Disponibles</p></div>');
			};

		});

	}
};

$(document).ready(
	function () {
		app.init();
	}
);