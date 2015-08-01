<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->deleteUsuario($_GET["id"]);
    header('Location: ../index.php');
 ?>

