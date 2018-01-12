<?php
		include ("php/conexion.php");
		$name = $_POST[ 'name' ];
		$last_name = $_POST[ 'last_name' ];
		$user = $_POST[ 'user' ];
		$mail = $_POST[ 'mail' ];
		$pass = sha1($_POST[ 'pass' ]);

		if (isset($_POST['envio'])) {
			$conexion->query("INSERT INTO registro (name_user, last_name, user_user, mail_user, pass_user) VALUES ('$name', '$last_name', '$user', '$mail', '$pass')");
				header("location: index.html");
		}
			
	?>