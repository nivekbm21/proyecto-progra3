<?php
session_start();
?>

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
          <a href="index.php" class="navbar-brand"><img alt="logo" src="img/logo.png" width="60"/img></a>
        </div><!-- Navbar Header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          
          <ul class="nav navbar-nav">
            <li><a href="index.php#Nuestros-Servicios">Servicios</a> 
            <li><a href="index.php#acerca-de-nosotros">Acerca de Nosotros</a> 
            <li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a> 
            <li><a href="index.php#Contactenos">Contactenos</a>
              <?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
                <li><a href="admin/index.php">Administracion</a>;
                <li><a href="admin/cerrar-Sesion.php">Cerrar Sesion</a>;
              <?php }
                else{?>
                  <li><a href="admin/login.php">Iniciar Sesion</a>;
               <?php   
                }
              ?>
          </ul>
        </div>
      </div><!-- End Container-->
    </nav><!-- End navbar -->
