<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Inicio</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
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
  					<li><a href="preguntas-frecuentes.html">Preguntas Frecuentes</a> 
  					<li><a href="#Contactenos">Contactenos</a> 
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Ingreso Administrativo</h5>
                    <form class="form form-signup" role="form" method="post" action="ValidarLogin.php">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" name="username"  id="username" placeholder="Usuario" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contrase&ntilde;a" />
                        </div>
                    </div>
                </div>
                <input type="submit" name="Submit" value="Iniciar Sesion"  class="btn btn-sm btn-primary btn-block">
               <br>
               </form>
            </div>
         <?php
				if(isset($_GET['errorpass'])){ 
					echo "
					<div class='alert alert-danger-alt alert-dismissable'>
					<span class='glyphicon glyphicon-certificate'></span>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
						×</button>Datos Incorrectos, Vuelva a intentarlo.</div>"; 
				}else{ 
					echo ""; 
				} 
		?>
		<?php
				if(isset($_GET['nopass'])){ 
					echo "
					<div class='alert alert-danger-alt alert-dismissable'>
					<span class='glyphicon glyphicon-certificate'></span>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
						×</button>No ha introducido una contraseña.</div>"; 
				}else{ 
				echo ""; 
				} 
		?>
		<?php
			if(isset($_GET['logout'])){ 
			echo "
			<div class='alert alert-danger-alt alert-dismissable'>
							<span class='glyphicon glyphicon-certificate'></span>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
								×</button>Ha cerrado sesion correctamente.</div>
			"; 
			}else{ 
			echo ""; 
			} 
        ?>
        </div>
    </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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