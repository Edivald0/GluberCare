<?php
	session_start();
	$usuario = $_SESSION[ 'usuario' ];
	//var_dump($_POST);
	$one = $_POST[ 'one' ];
	$br = ' | ';


	$array_one = "";
	if (isset($one)) {
		foreach ($one as $key) {
			$array_one = $array_one . $br . $key;
		}
		//echo $array_one;
		include "../php/conexion.php";
		$consulta = "UPDATE medical SET one_medical = '$array_one' WHERE user_medical = '$usuario'";
				mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
		//echo $consulta;
		$consulta2 = " SELECT one_medical FROM medical WHERE user_medical = '$usuario'";
		$resultado = mysqli_query($conexion,$consulta2);
		$registro = mysqli_fetch_assoc($resultado);
		echo $registro["one_medical"];
		//header("location: index.php");
	}