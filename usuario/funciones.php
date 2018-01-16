<?php
	
	function print_foto(){
		$usuario = $_SESSION[ 'usuario' ];
		include "../php/conexion.php";	
		$consulta = " SELECT foto_user FROM registro WHERE user_user = '$usuario'";
		$resultado = mysqli_query($conexion,$consulta);
		$registro = mysqli_fetch_assoc($resultado);
		echo $registro["foto_user"];
	}
	function print_genero(){
		$usuario = $_SESSION[ 'usuario' ];
		include "../php/conexion.php";	
		$consulta = " SELECT sex_user FROM registro WHERE user_user = '$usuario'";
		$resultado = mysqli_query($conexion,$consulta);
		$registro = mysqli_fetch_assoc($resultado);
		$op = $registro["sex_user"];
		if ($op == 1) {
			echo "<img src='../img-usuarios/01_siluetas/silueta_hombre.png' class='img-responsive'/>";
		}
		if ($op == 2) {
			echo "<img src='../img-usuarios/01_siluetas/silueta_mujer.png' class='img-responsive'/>";
		}
		
	}
	function print_birthdate(){
		$usuario = $_SESSION[ 'usuario' ];
		include "../php/conexion.php";	
		$consulta = " SELECT birthdate_user FROM registro  WHERE user_user = '$usuario'";
		$resultado = mysqli_query($conexion,$consulta);
		$registro = mysqli_fetch_assoc($resultado);
		echo $registro["birthdate_user"];
	}
	function print_postal_user(){
		$usuario = $_SESSION[ 'usuario' ];
		include "../php/conexion.php";	
		$consulta = " SELECT postal_user FROM registro WHERE user_user = '$usuario'";
		$resultado = mysqli_query($conexion,$consulta);
		$registro = mysqli_fetch_assoc($resultado);
		echo $registro["postal_user"];
	}