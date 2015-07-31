<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$contacto=$connexion->getContacto();
	echo json_encode($contacto);
 ?>