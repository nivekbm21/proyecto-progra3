<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $servicios=$connexion->getUnServicio($_GET["id"]);
    unlink("../".$servicios["imagen"]);
    $connexion->deleteServicios($_GET["id"]);
    header('Location: ../index.php');


   



 ?>

	