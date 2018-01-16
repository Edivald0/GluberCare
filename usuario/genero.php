<?php

	$genero = $_POST[ 'sex' ];
	session_start();
	$usuario = $_SESSION[ 'usuario' ];
	if (isset($genero)) {
		include "../php/conexion.php";
		$consulta = "UPDATE registro SET sex_user = '$genero' WHERE user_user = '$usuario'";
		mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
		header("Location: ../usuario");
	}