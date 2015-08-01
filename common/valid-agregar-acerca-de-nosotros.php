<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->addAcerca_nosotros($_POST["titulo"],$_POST["contenido"],$_POST["tipo"],$_POST["simbolo"]);
    header('Location: ../index.php');
 ?>