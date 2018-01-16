<?php
//echo "<pre>";
//print_r($_FILES);
//echo "</pre>";

$tipo=$_FILES["foto"]["type"];
$archivo=$_FILES["foto"]["tmp_name"];
//string($cadena1,$cadena2) sirve para evaluar si en la primer cadena de texto
//existe la segunda cadena de texto.
//si dentro del tipo del archivose encuentra la palabra image
//significa que el archivo es una imgen.

if (strstr($tipo,"image") ){

	//para saber que tipo de extension es la imagen 
	if (strstr($tipo,"jpeg"))
			$extension=".jpg";
	else if (strstr($tipo,"gif")) 
			$extension=".gif";
	
	else if (strstr($tipo,"png")) 
			$extension=".png";

	session_start();
	$folio=$_SESSION["usuario"];
	//gurado la ruta que tendra en el servidor la imagen
		$destino="../img-usuarios/".$folio.$extension;
	//se sube la foto
	move_uploaded_file($archivo, $destino) or die ("No se puede subir la imagen");
	//Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
	$nombre_img="../img/".$folio;
	include "../funciones.php";
	borrar_imagenes($nombre_img,$extension);

	//realizar la actualizacionn al campo foto del usuario
	include"../php/conexion.php";
	$imagen=$folio.$extension;
	$consulta= "UPDATE registro SET foto_user = '$imagen' WHERE foto_user = '$folio'";
		mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
		header("Location: ../usuario");
} 
else{
header("Location: ../usuario/?op=foto&msJ=3");
}
?>

