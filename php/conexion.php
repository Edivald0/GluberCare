<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$baseDatos = "qwertyuiop_glubercare2";

	$conexion = new mysqli ($servername, $username, $password, $baseDatos);
		
		/*
			if ($conexion->connect_error) {
					echo "NO existe conexion";
				}else{
					echo "EXISTE la conexion";
				}
		
		*/
	
/*
$host="192.168.1.101";
$port=3306;
$socket="";
$user="root";
$password="Armadura.2012";
$dbname="qwertyuiop_glubercare";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
if ($conexion->connect_error) {
					echo "NO existe conexion";
				}else{
					echo "EXISTE la conexion";
				}


*/