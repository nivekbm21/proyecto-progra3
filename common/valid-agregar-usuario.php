<?php 
	include 'dbConnection.php';
    $connexion= new Connect;
    $connexion->addUsuario($_POST["nombre"],$_POST["apellido"],$_POST["usuario"],md5($_POST["contrasena"]),$_POST["cargo"],$_POST["estado"]);
    header('Location: ../index.php');
 ?>