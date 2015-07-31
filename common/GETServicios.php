<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$servicios=$connexion->getServicios();
	echo json_encode($servicios);
 ?>