<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Inicio</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
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
  					<li><a href="#Servicios">Servicios</a> 
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
  				<div class="carousel-inner">
  					<div class="item active">
  						<img src="img/highway.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>Highway heading</h3>
  						</div>
  					</div>
  					<div class="item">
  						<img src="img/river.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>River heading</h3>
  						</div>
  					</div>
  					<div class="item">
  						<img src="img/street.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>Street heading</h3>
  						</div>
  					</div>
  					<div class="item">
  						<img src="img/painting.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>Painting heading</h3>
  							<p>This is the caption</p>
  						</div>
  					</div>

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
			<div class="page-header" id="Servicios">
  				<h2>Servicios.<small> Te ayudamos a impulsar tu Empresa.</small></h2>
  			</div><!-- End Page Header -->

  			<div class="row">
  				<div class="col-sm-8">
  					<h3>Hospedaje</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum ut odio ac porta. Proin efficitur mi ut dui condimentum suscipit. Aenean quis tortor eget augue dapibus convallis a sagittis erat. Nullam luctus hendrerit faucibus. Aenean fermentum mollis nisl sed iaculis. Fusce accumsan mauris erat, eget porttitor risus iaculis quis. Integer eleifend ornare nunc, in aliquam ante tempus nec. Praesent ultricies feugiat leo at lobortis. Integer ipsum dui, auctor ut mi vitae, cursus pulvinar sapien. Aenean accumsan maximus nulla. Duis in tellus erat. Mauris pharetra ultrices lobortis.</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="img/imac.jpg" class="img-responsive" alt="image">
  				</div>
  			</div><!-- End row -->
  			<div class="row">
  				<div class="col-sm-8">
  					<h3>Optimizacion de Busqueda</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum ut odio ac porta. Proin efficitur mi ut dui condimentum suscipit. Aenean quis tortor eget augue dapibus convallis a sagittis erat. Nullam luctus hendrerit faucibus. Aenean fermentum mollis nisl sed iaculis. Fusce accumsan mauris erat, eget porttitor risus iaculis quis. Integer eleifend ornare nunc, in aliquam ante tempus nec. Praesent ultricies feugiat leo at lobortis. Integer ipsum dui, auctor ut mi vitae, cursus pulvinar sapien. Aenean accumsan maximus nulla. Duis in tellus erat. Mauris pharetra ultrices lobortis.</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="img/smartphone.jpg" class="img-responsive" alt="image">
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-8">
  					<h3>Mercadeo Digital</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum ut odio ac porta. Proin efficitur mi ut dui condimentum suscipit. Aenean quis tortor eget augue dapibus convallis a sagittis erat. Nullam luctus hendrerit faucibus. Aenean fermentum mollis nisl sed iaculis. Fusce accumsan mauris erat, eget porttitor risus iaculis quis. Integer eleifend ornare nunc, in aliquam ante tempus nec. Praesent ultricies feugiat leo at lobortis. Integer ipsum dui, auctor ut mi vitae, cursus pulvinar sapien. Aenean accumsan maximus nulla. Duis in tellus erat. Mauris pharetra ultrices lobortis.</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="img/user.jpg" class="img-responsive" alt="image">
  				</div>
  			</div>
            <div class="row">
  				<div class="col-sm-8">
  					<h3>Diseño de Paginas Web</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum ut odio ac porta. Proin efficitur mi ut dui condimentum suscipit. Aenean quis tortor eget augue dapibus convallis a sagittis erat. Nullam luctus hendrerit faucibus. Aenean fermentum mollis nisl sed iaculis. Fusce accumsan mauris erat, eget porttitor risus iaculis quis. Integer eleifend ornare nunc, in aliquam ante tempus nec. Praesent ultricies feugiat leo at lobortis. Integer ipsum dui, auctor ut mi vitae, cursus pulvinar sapien. Aenean accumsan maximus nulla. Duis in tellus erat. Mauris pharetra ultrices lobortis.</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="img/user.jpg" class="img-responsive" alt="image">
  				</div>
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
			<div class="container text-center">
  			<h1>Historia</h1>
  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum ut odio ac porta. Proin efficitur mi ut dui condimentum suscipit. Aenean quis tortor eget augue dapibus convallis a sagittis erat. Nullam luctus hendrerit faucibus. Aenean fermentum mollis nisl sed iaculis. Fusce accumsan mauris erat, eget porttitor risus iaculis quis. Integer eleifend ornare nunc, in aliquam ante tempus nec. Praesent ultricies feugiat leo at lobortis. Integer ipsum dui, auctor ut mi vitae, cursus pulvinar sapien. Aenean accumsan maximus nulla. Duis in tellus erat. Mauris pharetra ultrices lobortis.</p>
				<p>Fusce malesuada augue at leo consectetur, et efficitur leo varius. Ut convallis sapien et quam consectetur scelerisque. Donec sed varius odio. Duis nec leo dolor. Nunc tempor sodales lacus, non placerat mi placerat id. Etiam id ultricies odio, in viverra risus. Nulla viverra mollis tempor. Nullam scelerisque elementum ligula, eget ullamcorper tortor mollis semper. Proin mollis ligula turpis, at dictum est ultricies sed. Cras tempor ipsum in semper bibendum. Integer vel justo tincidunt, efficitur nisl vitae, posuere dui. Donec viverra ornare nisi vitae pretium. Nulla tempor imperdiet ipsum, a consequat augue.</p>
				<p>Nam cursus neque vel erat accumsan gravida. Nulla facilisi. Proin facilisis vitae ex vitae interdum. Sed lobortis velit id est egestas tincidunt. Proin consequat turpis quis nisl commodo, sed volutpat odio tincidunt. In dictum imperdiet dui. Nullam sed dolor at tellus blandit bibendum. Cras rutrum mi quis ligula tempus pharetra. Aliquam luctus eget ante eget lacinia. Ut vulputate feugiat sapien, vel lobortis justo malesuada eu. Quisque iaculis velit mollis nibh lobortis euismod. Donec feugiat sapien enim, et feugiat risus pharetra placerat. Morbi ornare eros nec nisi auctor luctus.</p>
				<p>Curabitur finibus tellus non purus varius, non sodales lorem viverra. Praesent enim orci, molestie vitae diam commodo, tempus mattis augue. Quisque tempor pulvinar cursus. Phasellus at justo ullamcorper, finibus dui a, vehicula est. Quisque semper in dolor at posuere. Nullam lobortis molestie sem, ut aliquam quam molestie sed. Sed pellentesque turpis nec ligula varius fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut orci nibh, aliquam ut faucibus sit amet, egestas eu quam. Phasellus a hendrerit erat. Morbi euismod risus sed massa fermentum egestas. Ut commodo eget odio nec vulputate. Vivamus volutpat lorem massa, a sagittis enim suscipit id.</p>
				<p>Etiam eget odio posuere, lobortis odio tempus, dapibus nunc. Maecenas egestas enim at ipsum tristique, at lobortis metus accumsan. Cras nisl tortor, tincidunt et interdum sed, mollis non ante. Pellentesque id ultricies est. Maecenas tincidunt imperdiet posuere. Pellentesque pulvinar faucibus leo id iaculis. Pellentesque nunc augue, consequat facilisis condimentum a, tincidunt sit amet tellus. Aenean a ligula arcu. Aenean sollicitudin vehicula mauris. Ut porta diam id odio placerat, eu tincidunt ligula fermentum. Maecenas et efficitur eros. Quisque ac turpis rhoncus, vulputate nisl id, rhoncus lacus. Proin tincidunt vitae nunc eu tempus. Maecenas a metus molestie sem eleifend volutpat in in felis. Donec ultricies, diam pellentesque placerat maximus, leo tellus tristique sem, quis commodo lorem dui ac urna. </p>
  		</div><!-- End container -->
  			
  		</section>
        
        <div class="row">
  				<div class="col-sm-4">
  					<div class="panel panel-default text-center">
  						<div class="panel-body">
  							<span class="glyphicon glyphicon-ok"></span>
  							<h4>Vision</h4>
  							<p>Nam velit est, tempor vel posuere et, auctor a lectus. Aenean gravida, est accumsan dictum rhoncus, lectus mi suscipit lacus, suscipit accumsan augue tellus vitae dolor. Morbi in euismod dui</p>
  						</div>
  					</div>
  				</div>

  				<div class="col-sm-4">
  					<div class="panel panel-default text-center">
  						<div class="panel-body">
  							<span class="glyphicon glyphicon-star"></span>
  							<h4>Mision</h4>
  							<p>Nam velit est, tempor vel posuere et, auctor a lectus. Aenean gravida, est accumsan dictum rhoncus, lectus mi suscipit lacus, suscipit accumsan augue tellus vitae dolor. Morbi in euismod dui</p>
  						</div>
  					</div>
  				</div>

  				<div class="col-sm-4">
  					<div class="panel panel-default text-center">
  						<div class="panel-body">
  							<span class="glyphicon glyphicon-play-circle"></span>
  							<h4>Valores</h4>
  							<p>Nam velit est, tempor vel posuere et, auctor a lectus. Aenean gravida, est accumsan dictum rhoncus, lectus mi suscipit lacus, suscipit accumsan augue tellus vitae dolor. Morbi in euismod dui</p>
  						</div>
  					</div>
  				</div>
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