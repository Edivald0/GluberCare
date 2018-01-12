<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datos del Usuario</title>
	<style type="text/css">
		table{
			border: 1px solid red;
		}
	</style>
</head>
<body>
	<centar>
	<?php
		//$conexion = new mysqli ("localhost", "root", "", "conexion");
		include ("conexion.php");
		//Consulta de datos guardados en la DB
		$datos = $conexion->query("SELECT `id_user`, `date_register_user`, `name_user`, `a_p_user`, `a_m_user`, `date_birth_user`, `addres_user`, `phone_user`, `cell_phone_user`, `email_user`, `scholarship_user`, `occupation_user` FROM `registro` WHERE 1");

		$user = mysqli_fetch_array($datos);
		echo $user['id_user'];
		echo $user['date_register_user'];
	?>
	

	
	

	</centar>
</body>
</html>