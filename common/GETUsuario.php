<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$usuario=$connexion->getUsuario();
	echo json_encode($usuario);
 ?>