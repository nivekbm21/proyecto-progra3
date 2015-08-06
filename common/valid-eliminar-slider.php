<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $slider=$connexion->getUnSlider($_GET["id"]);
    unlink("../".$slider["ruta"]);
    $connexion->deleteSiler($_GET["id"]);
    header('Location: ../index.php');
 ?>

