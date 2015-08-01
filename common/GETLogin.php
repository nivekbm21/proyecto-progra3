<?php

	if($_SESSION["nombre"]==$_POST["username"]){
		header('Location: ../index.php');
	}
	else{
		include 'dbConnection.php';
		$connexion= new Connect;
		$usuario=$connexion->getUsuario_login($_POST["username"],$_POST["password"]);

		if (empty($usuario)){
			header('Location: ../login.php?errorpass=error');
		}
		else{
			session_start();
			$_SESSION['id'] = $usuario["id"];
			$_SESSION['nombre'] = $usuario["nombre"];
			$_SESSION['apellido'] = $usuario["apellido"];
			$_SESSION['usuario'] = $usuario["usuario"];
			$_SESSION['cargo'] = $usuario["cargo"];
			$_SESSION['estado'] = $usuario["estado"];
			header('Location: ../index.php');
		}
	}
 ?>