<?php
$imagen = $_POST['birthdate'];
	
		session_start();
		$fecha_nacimiento = $_SESSION["fecha_nacimiento"];	
		include "../php/conexion.php";

		//$imagen = $matricula.$extension;
		$consulta = "UPDATE registro SET birthdate_user = '$imagen' WHERE birthdate_user = '$fecha_nacimiento'";
			
		mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
		
		header("Location:index.php");
	
	


