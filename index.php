<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Inicio</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/cargaIndex.js"></script>
  <script>
        function initialize() {
          var mapCanvas = document.getElementById('map-canvas');
          var mapOptions = {
            center: new google.maps.LatLng(9.9357431,-84.0677798),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>

	<style>
	body{
		padding-top: 40px;
	}
	</style>

<body data-spy="scroll" data-target="#my-navbar">

  <!-- Menu -->
  	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>

  				<a href="" class="navbar-brand"><img alt="logo" src="img/logo.png" width="60"/img></a>
  			</div><!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
  				
  				<ul class="nav navbar-nav">
  					<li><a href="#Nuestros-Servicios">Servicios</a> 
  					<li><a href="#acerca-de-nosotros">Acerca de Nosotros</a> 
  					<li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a> 
  					<li><a href="#Contactenos">Contactenos</a> 
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->

<!-- Slider -->
	<div class="container">
		<section>
			
            <hr>

  			<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
  				<ol class="carousel-indicators">
  					<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
  					<li data-target="#screenshot-carousel" data-slide-to="1"></li>
  					<li data-target="#screenshot-carousel" data-slide-to="2"></li>
  					<li data-target="#screenshot-carousel" data-slide-to="3"></li>
  				</ol>
  				<div class="carousel-inner" id='slider_contenedor_imagen'>
  					

  				</div><!-- End Carousel inner -->
  				<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
  					<span class="glyphicon glyphicon-chevron-left"></span>
  				</a>
  				<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
  					<span class="glyphicon glyphicon-chevron-right"></span>
  				</a>
  			</div><!-- End Carousel -->

		</section>
	</div>
  	<!-- Feedback-->
<!-- Servicios -->
	<div class="container">
		<section>
			<div class="page-header" id='Nuestros-Servicios'>
  				<h2>Servicios.<small> Te ayudamos a impulsar tu Empresa.</small></h2>
  			</div><!-- End Page Header -->

        <div id="Servicios">
    			
        </div>

  			<hr>

  			
  			</div><!-- end row -->

		</section>
	</div><!-- End Container -->


  	<div class="container">
  		<section>
  			<div class="page-header" id="acerca-de-nosotros">
  				<h2>Acerca de Nosotros.<small> Historia de nuestra empresa</small></h2>
  			</div>
			<div class="container text-center" id='acerca-largo'>
  			
  		</div><!-- End container -->
  			
  		</section>
        
      <div class="row" id='acerca-corto'>
  				
      </div><!--End Container-->
  	</div><!--End Container-->

<!-- Contactenos -->

  <div class="container">
    <section>
      <div class="page-header" id="Contactenos">
          <h2>Contactenos.<small> Realice sus Consultas y Cotizaciones.</small></h2>
        </div><!-- End Page Header -->

        <div class="row">
          <div class="col-lg-4">
            <p>Contactenos por correo o Visitenos en nuestras Oficinas</p>

			<div id="map-canvas">hola</div>
            
            <!--<address>
              <strong>Wiredwiki Pvt Ltd.</strong></br>
              111, Malviya nagar </br>
              Plot no. 45</br>
              New delhi - 110017</br>
              P: +91 9999999999
            </address>-->
          </div>
          
          <div class="col-lg-8">
            <form action="" class="form-horizontal">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-name" placeholder="Ingrese su Nombre y Apellidos">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Correo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" placeholder="Ingrese la direcccion de correo electronico">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-company" class="col-lg-2 control-label">Empresa</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-company" placeholder="Indique el nombre de la empresa.">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Consulta</label>
                <div class="col-lg-10">
                  <textarea name="user-message" id="user-message" class="form-control" 
                  cols="20" rows="10" placeholder="Ingrese su consulta"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>

             

            </form>
          </div>
        </div><!-- End the row -->

    </section>
  </div>

<!-- Footer -->

    <footer>
      <hr>
        <div class="container text-center">
        <ul class="list-inline">
          <li><a href="http://www.twitter.com"><img alt="Twitter" src="img/Twitter.png" width="50px" /img></a></li>
          <li><a href="http://www.facebook.com"><img alt="Facebook" src="img/Facebook.png" width="50px" /img></a></li>
          <li><a href="http://www.youtube.com"><img alt="YouTube" src="img/Youtube.png" width="50px" /img></a></li>
        </ul>

        <p>&copy; Copyright @ 2015</p>
        <p>Dise&#241;ado por Diego Sanchez y Kevin Blanco</p>
	    <p>Programaci&oacute;n 3</p>
		<p>Profesor: David Quesada</p>

      </div><!-- end Container-->
      

    </footer>

	<script src="js/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>	
</html>