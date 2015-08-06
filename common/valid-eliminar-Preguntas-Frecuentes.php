<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->deletePreguntas_Frecuentes($_GET["id"]);
    header('Location: ../index.php');
 ?>
