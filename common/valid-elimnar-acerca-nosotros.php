<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->deleteAcerca_Nosotros($_GET["id"]);
    header('Location: ../index.php');
 ?>

