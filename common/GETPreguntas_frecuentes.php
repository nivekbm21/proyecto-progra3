<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$preguntas_frecuentes=$connexion->getPreguntas_frecuentes();
	echo json_encode($preguntas_frecuentes);
 ?>