<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Perfil | GluberCare</title>
</head>
<body>
	<?php
		if( isset($_GET["error"])){
			if($_GET["error"]==1)
		 		echo "<p>Password o Usuario incorrectos</p>";
		      if($_GET["error"]==2)
		      	echo "<p>Los datos son incorrectos o no está registrado</p>";	      
		    }
	?>

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
	</section>
</body>
</html>