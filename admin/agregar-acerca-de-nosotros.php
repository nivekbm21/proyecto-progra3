<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Inicio</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/styles.css">
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

          <a href="index.php" class="navbar-brand"><img alt="logo" src="../img/logo.png" width="60"/img></a>
        </div><!-- Navbar Header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          
          <ul class="nav navbar-nav">
            <li><a href="index.php#Servicios">Servicios</a> 
            <li><a href="index.php#acerca-de-nosotros">Acerca de Nosotros</a> 
            <li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a> 
            <li><a href="index.php#Contactenos">Contactenos</a> 
          </ul>
        </div>
      </div><!-- End Container-->
    </nav><!-- End navbar -->
    

<!-- Agregar Acerca de Nosotros -->

  <div class="container">
    <section>
      <div class="page-header" id="agregar-acerca-de-nosotros">
          <h2>Agregar Acerca de Nosotros.<small> Agregar un nuevo Acerca de Nosotros.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-agregar-acerca-de-nosotros.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="titulo" placeholder="Inserte el titulo del servicio">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Contenido</label>
                <div class="col-lg-10">
                  <textarea name="contenido" class="form-control" 
                  cols="20" rows="10" placeholder="Ingrese el detalle del servicio"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Tipo de Contenido</label>
                <div class="col-lg-10">
                   <select name="tipo" class="form-control">
                    <option value="l">Texto Largo</option>
                    <option value="c">Texto Corto</option>
                   </select>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-10">
                   <select name="simbolo" class="form-control">
                    <option value="2">Estrella</option>
                    <option value="1">Check</option>
                    <option value="3">Circulo</option>
                   </select>
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
          <li><a href="http://www.twitter.com"><img alt="Twitter" src="../img/Twitter.png" width="50px" /img></a></li>
          <li><a href="http://www.facebook.com"><img alt="Facebook" src="../img/Facebook.png" width="50px" /img></a></li>
          <li><a href="http://www.youtube.com"><img alt="YouTube" src="../img/Youtube.png" width="50px" /img></a></li>
        </ul>

        <p>&copy; Copyright @ 2015</p>
        <p>Dise&#241;ado por Diego Sanchez y Kevin Blanco</p>
      <p>Programaci&oacute;n 3</p>
    <p>Profesor: David Quesada</p>

      </div><!-- end Container-->
      

    </footer>

  <script src="../js/jquery-2.1.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="../js/bootstrap.min.js"></script>
</body> 
</html>