<?php
	$one = $_POST[ 'one' ];
	$two = $_POST[ 'mes' ];
	//echo $one . "<br>";
	if (is_array($one)) {
		while (list($key,$value) = each($one)) {
			echo $value;
		}

	}
	echo "<br>";
	$cadena = "";
	foreach ($two as $key) {
		if($cadena == ''){
			$cadena =$key;
		}else{
			$cadena .= $key;
		}
	}
	echo $cadena[1];



	//******************************************

	$one = $_POST[ 'one' ];
	//$two = $_POST[ 'mes' ];
	//session_start();
	//$usuario = $_SESSION[ 'usuario' ];
	if (isset($one)) {
		//include "../php/conexion.php";
		$cadena = '';
		foreach ($one as $id){
			$s = '<br>';
			if($cadena == ''){
				$cadena = $id;
			}else{
				$cadena .= $s.$id;
			}
		}
		
		//	echo $cadena;
		if ($cadena[0] == "") {
			
		}	else{
			//echo "Diabetes Mellitus Tipo 1, Tipo 2";
		}
		if ($cadena[1] = 2) {
				echo "Problemas cardiacos o Hipertensión";
		}	
	}
	
		