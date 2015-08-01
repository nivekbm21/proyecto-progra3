<?php 
  include 'header.php';
 ?>

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
            <form action="common/enviarcorreo.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="user-name" placeholder="Ingrese su Nombre y Apellidos">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Correo</label>
                <div class="col-lg-10">
                  <input type="email" name="user-email" class="form-control">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-company" class="col-lg-2 control-label">Empresa</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="user-company" placeholder="Indique el nombre de la empresa.">
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

<?php 
  include 'footer.php';
 ?>
