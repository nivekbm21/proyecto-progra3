<?php 
	include 'dbConnection.php';
	$connexion= new Connect;
	$formulario=$connexion->getFormulario();
	echo json_encode($formulario);
 ?>