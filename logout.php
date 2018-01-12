<?php

$usuario="";
$pass="";
if (isset($_POST["user"])) {
	$usuario = $_POST["user"];
}
if (isset($_POST["password"])) {
	$pass= $_POST["password"];
}
if (empty($usuario)|| empty($pass)) {
	header("Location:php/index.php?error=1");
}
else{
	include"php/conexion.php";
	$consulta = "SELECT * FROM registro WHERE user_user = '$usuario'";
	$consulta = $consulta."AND pass_user = sha1('$pass')";
	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
	if (mysqli_num_rows($resultado)==1) {
		$registro = mysqli_fetch_assoc($resultado);
		session_start();
		
		$_SESSION["folio"] = $registro["id_user"];
		$_SESSION["usuario"] = $registro["user_user"];
		$_SESSION["contraseña"] = $registro["pass_user"];
		$_SESSION["fecha_registro"] = $registro["date_register_user"];
		$_SESSION["nombre"] = $registro["name_user"];
		$_SESSION["apellido"] = $registro["last_name"];
		$_SESSION["correo"] = $registro["mail_user"];
		$_SESSION["foto"] = $registro["foto_user"];
		$_SESSION["fecha_nacimiento"] = $registro["birthdate_user"];
		$_SESSION["codigo_postal"] = $registro["postal_user"];
		$_SESSION["peso"] = $registro["weight_user"];
		$_SESSION["estatura"] = $registro["height_user"];

		$_SESSION["estado_civil"] = $registro["civil_user"];


		header("Location:usuario/");

	}
	else{
		header("Location:php/index.php?error=2");
	}
}
