<?php 
	
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->updateAcerca_Nosotros($_POST["titulo"],$_POST["contenido"],$_POST["tipo"],$_POST["simbolo"],$_POST["id"]);
    header('Location: ../index.php');
 ?>

  