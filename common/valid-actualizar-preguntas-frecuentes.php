<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion-> updatePreguntas_Frecuentes($_POST["pregunta"],$_POST["respuesta"],$_POST["id"]);
    header('Location: ../index.php');
 ?>

  