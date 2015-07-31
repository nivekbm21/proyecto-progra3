<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$acercaNosotros=$connexion->getAcerca_nosotros ();
	echo json_encode($acercaNosotros);
 ?>