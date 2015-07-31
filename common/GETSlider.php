<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$slider=$connexion->getSlider();
	echo json_encode($slider);
 ?>