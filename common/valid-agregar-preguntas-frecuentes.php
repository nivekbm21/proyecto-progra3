<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $servicios=$connexion->addPreguntas_frecuentes( $_POST["pregunta"],$_POST["respuesta"]);
    header('Location: ../index.php');
 ?>
		