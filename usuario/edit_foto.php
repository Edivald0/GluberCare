<?php
	//echo "<pre>";
	//print_r($_FILES);
	//echo "</pre>";
	
	$tipo=$_FILES["foto"]["type"];
	$archivo=$_FILES["foto"]["tmp_name"];
	if (strstr($tipo,"image") ){
		if (strstr($tipo,"jpeg"))
				$extension=".jpg";
		else if (strstr($tipo,"gif")) 
				$extension=".gif";
		else if (strstr($tipo,"png")) 
				$extension=".png";
		session_start();
		$folio=$_SESSION["usuario"];
		$destino="../img-usuarios/".$folio.$extension;
		move_uploaded_file($archivo, $destino) or die ("No se puede subir la imagen");
		$nombre_img="../img/".$folio;
		include "../funciones.php";
		borrar_imagenes($nombre_img,$extension);
		include"../php/conexion.php";
		$imagen=$folio.$extension;
		$consulta= "UPDATE registro SET foto_user = '$imagen' WHERE user_user = '$folio'";
		mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
		header("Location: ../usuario");
	}
	else{
		header("Location: ../usuario/?op=foto&msJ=3");
	}	

?>

