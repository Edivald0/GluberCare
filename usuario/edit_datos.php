<?php
	$fechaN = $_POST[ 'birthdate' ];
	$postalU = $_POST[ 'postal' ];
	session_start();
	$usuario = $_SESSION[ 'usuario' ];
	if (isset($fechaN)) {
		include "../php/conexion.php";
		$consulta = "UPDATE registro SET birthdate_user = '$fechaN' WHERE user_user = '$usuario'";
		mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
		header("Location: ../usuario");
	}
	if (isset($postalU)) {
		include "../php/conexion.php";
		$consulta = "UPDATE registro SET postal_user = '$postalU' WHERE user_user = '$usuario'";
		mysqli_query($conexion,$consulta) or die (mysql_error($conexion));
		header("Location: ../usuario");
	}


?>