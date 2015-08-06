<?php
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->addContacto($_POST["user-name"],$_POST["user-email"],$_POST["user-company"],$_POST["user-message"]);
    header('Location: ../index.php');
 ?>