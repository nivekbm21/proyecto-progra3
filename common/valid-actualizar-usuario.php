<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->updateUsuario($_POST["nombre"],$_POST["apellido"],$_POST["usuario"],md5($_POST["contrasena"]),$_POST["cargo"],$_POST["estado"],$_POST["id"]);
    header('Location: ../index.php');
 ?>

  