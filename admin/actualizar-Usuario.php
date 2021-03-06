<?php 
  include '../common/dbConnection.php';
  $connexion= new Connect;
  $usuario=$connexion->getUnUsuario($_GET["id"]);
  
 ?>

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
    

<!-- Agregar Usuario -->

  <div class="container">

    <section>
      <div class="page-header" id="agregar-Servicio">
          <h2>Actualizar Usuario.<small> Actualizar un Usuario Administrador.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-actualizar-usuario.php" class="form-horizontal" method="POST" enctype="multipart/form-data">

              <input type="hidden" class="form-control" name="id" value="<?php echo $usuario['id']; ?>"placeholder="">


              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Nombre </label> 

                 <div class="col-lg-10">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $usuario['nombre']; ?>" placeholder="" > 
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Apellido</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="apellido"  value="<?php echo $usuario['apellido']; ?>"placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Usuario</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="usuario" value="<?php echo $usuario['usuario']; ?>"placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Contraseña</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" name="contrasena" value="<?php echo $usuario['contrasena']; ?>"placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Cargo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="cargo"value="<?php echo $usuario['cargo']; ?>" placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-10">
                   <select name="estado" class="form-control">
                    <option value="0" <?php if($usuario['estado'] == '0'){echo("selected");}?>>Deshabilitado</option>
                    <option value="1" <?php if($usuario['estado'] == '1'){echo("selected");}?>>Habilitado</option>
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