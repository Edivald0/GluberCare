<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Perfil | GluberCare</title>
</head>
<body>
	<?php
	/*	if( isset($_GET["error"])){
			if($_GET["error"]==1)
		 		echo "<p>Password o Usuario incorrectos</p>";
		      if($_GET["error"]==2)
		      	echo "<p>Los datos son incorrectos o no está registrado</p>";	      
		    }*/

	?>

	<?php 
session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie 
include "php/conexion.php"; //es la sentencia q usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
/*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/

function verificar_login($user,$password,$result) 
    { 
        $sql = “SELECT * FROM user_user WHERE registro = ‘$user’ and ‘$password’ = ‘$password’”;
        $rec = mysql_query($sql); 
        $count = 0; 
        while($row = mysql_fetch_object($rec)) 
        { 
            $count++; 
            $result = $row; 
        } 
        if($count == 1) 
        { 
            return 1; 
        } 
        else 
        { 
            return 0; 
        } 
    } 

/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{ 
    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        { 
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['userid'] = $result->idusuario; 
            header("location:error.php"); 
        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        } 
    } 
?> 
<!--form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
</form--> 




	<section class="container-fluid formulario-login" id="parrafo1">
		<div>
			<form name="form-login" action="login-user.php" method="POST">
				<div class="col-xs-12 col-md-6 label-login">	
					<label>Usuario:</label>
				</div>
				<div class="col-xs-12 col-md-6 input-login">	
					<input required="" type="text" name="user" placeholder="" />
					<br /><br />
				</div>
				<div class="col-xs-12 col-md-6 label-login">
					<label>Password:</label>
				</div>
				<div class="col-xs-12 col-md-6 input-login">
					<input required="" type="text" name="password" placeholder="" />
					<br /><br />
				</div>
				<div class="col-xs-12 col-md-12 submit-login">
					<input type="submit" name="login" value="Acceder">
				</div>
			</form>
			<div class="col-xs-12 col-md-12 submit-login">
				<br />
				<a href="registro.php" class="external"><button class="submit-account">Crear Cuenta</button></a>
			</div>
		</div>
		<?php 
} else { 
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="logout.php">Logout</a>'; 
} 
?> 
	</section>
</body>
</html>