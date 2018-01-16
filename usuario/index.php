<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuario | GluberCare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />

	  	<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="../css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="../css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="../css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../css/owl.theme.default.min.css">
		<!-- Flexslider -->
		<link rel="stylesheet" href="../css/flexslider.css">
		<!-- Theme style  -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="../css/style.css">

		<link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.min.css">
		<!-- Modernizr JS -->
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111665725-3"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-111665725-3');
		</script>
</head>
<body>
	<?php
	//session_start();
		include ("funciones.php");
		
		include ("../php/conexion.php");
		session_start();
		//USUARIO /index.php
		if (isset($_SESSION["estado"]) && $_SESSION["estado"] == 0) {
			include "cambiar_password.php";
		}
		if (isset($_SESSION["estado"]) && $_SESSION["estado"] == 1) {
			include "../funciones.php";
			$foto = nombre_foto($_SESSION["usuario"]);
		}
		//si el alumno quiere cambiar su pasword o es la primera vez 
		if (isset($_GET["op"])&& $_GET["op"]=="pass") {
			include'cambiar_password.php';
		}
		//formulario para cambiar la foto del susuario
		function foto(){
			if (isset($_GET["op"])&& $_GET["op"]=="foto") {
				echo "<form action='edit_foto.php' enctype='multipart/form-data' method='post'>
						<section class='row-fluid'>
				       		<div class='col-xs-10 col-md-6 btn-foto-1'><input type='file' name='foto' required=''></div>
			       			<div class='col-xs-10 col-md-6 btn-foto'><input type='submit' value='Subir'/></div>
			       		</section
			       	</form>
			       	<p class='btn-foto-cerrar'>
			       		<a href='index.php'>
			       			<i class='fa fa-times' aria-hidden='true'></i>
			       		</a>
			       	</p>
			       	";
			}
		}

		function birthdate(){
			if (isset($_GET["op"])&& $_GET["op"]=="birthdate") {
				echo "<form action='edit_datos.php' method='post'>
						<section class='row-fluid'>
				       		<div class='col-xs-10 btn-edit'>
				       			<input type='date' name='birthdate' required=''>
				       		</div>
			       			<div class='col-xs-10 btn-edit-2'>
			       				<input type='submit' value='Guardar'/>
			       			</div>
			       		</section
			       	</form>
			       	<p class='btn-edit-cerrar'>
			       		<a href='index.php'>
			       			<i class='fa fa-times' aria-hidden='true'></i>
			       		</a>
			       	</p>
			       	";
			}
		}
		function postal(){
			if (isset($_GET["op"])&& $_GET["op"]=="postal-user") {
				echo "<form action='edit_datos.php' method='post'>
						<section class='row-fluid'>
				       		<div class='col-xs-10 btn-edit'>
				       			<input type='text' name='postal' required=''>
				       		</div>
			       			<div class='col-xs-10 btn-edit-2'>
			       				<input type='submit' value='Guardar'/>
			       			</div>
			       		</section
			       	</form>
			       	<p class='btn-edit-cerrar'>
			       		<a href='index.php'>
			       			<i class='fa fa-times' aria-hidden='true'></i>
			       		</a>
			       	</p>
			       	";
			}
		}
		/*function weight(){
			if (isset($_GET["op"])&& $_GET["op"]=="weight") {
				echo "<form action='edit_datos.php' method='post'>
						<section class='row-fluid'>
				       		<div class='col-xs-10 btn-edit'>
				       			<input type='number' name='weight' required=''>
				       		</div>
			       			<div class='col-xs-10 btn-edit-2'>
			       				<input type='submit' value='Guardar'/>
			       			</div>
			       		</section
			       	</form>
			       	<p class='btn-edit-cerrar'>
			       		<a href='index.php'>
			       			<i class='fa fa-times' aria-hidden='true'></i>
			       		</a>
			       	</p>
			       	";
			}
		}*/
		
	?>	
	<!--div class="gtco-loader"></div-->
	<div id="page page-2">
		<!-- MAIN MENU -->
		<nav class="gtco-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<!--div id="gtco-logo"><a href="index.html">Just<em>ice</em></a></div-->
						<div id="gtco-logo" class="logo-home">
							<a href="http://gluber.care">
								<img src="../images/gluber_care-01.png">
							</a>
						</div>
					</div>
					<div class="col-xs-10 text-right menu-1 main-nav">
						
						<ul>
							<!--li class=""><a href="../index.html" class="external">Inicio</a></li-->
							<!--li><a href="http://gluber.care#about-2" class="external">Nosotros</a></li-->
						</ul>
						
					</div>
				</div>	
			</div>
		</nav>

		<section class="row-fluid main-section">
			<div class="col-xs-12 col-md-2 btns-user">
				<button class="btn-user">USUARIO</button>
				<button class="btn-user">DATOS ADICIONALES</button>
				<a href="ficha-medica.html"><button class="btn-user">FICHA MEDICA</button><br></a>
				<a href="salir.php"><button class="btn-user">Salir</button></a>
				
			</div>
		</section>
		
		<section class="row-fluid">
			<form name="input" action="genero.php" method="post">
				<div class="col-xs-12 col-md-2 image-user">
					<?php print_genero(); ?>
					<div class="row-fluid">
						<div class="col-xs-12 col-md-6 no-padding">
							<input type="radio" name="sex" value="1" onchange="this.form.submit()"/>
							<label class="btn-genero-left">Maculino</label>
						</div>
						<div class="col-xs-12 col-md-6 no-padding">
							<input type="radio" name="sex" value="2" onchange="this.form.submit()" />
							<label class="btn-genero-right">Femenino</label> 
						</div>
					</div>
				</div>
			</form>
		</section>

		<section class="row-fluid">
			<div class="col-xs-12 col-md-8 datos-personales">
				<div class="row-fluid">
					<div class="col-xs-12 col-md-offset-6 col-md-3">
						<a class="btn-datos-edit" href="#">EDITAR DATOS</a>
					</div>
					<div class="col-xs-12 col-md-2">
						<a class="btn-datos-edit" href="#">GUARDAR</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-12">
						<button class="btn-datos"><i class="fa fa-user" aria-hidden="true"></i>DATOS PERSONALES</button>
					</div>			
				</div>
				<div class="row-fluid">
					<div class="col-xs-12 text-center img-perfil">
						<!--img src="../img-usuarios/usuario.jpg<?php //echo $imagen;  ?> "/-->
						<img src="../img-usuarios/<?php print_foto();  ?> "/>
						<a href="?op=foto"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-12 col-md-12 text-center">
						<?php foto(); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-12 col-md-12 text-center">
						<div class="print-information">
							<?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-12 col-md-6">
						<div class="row-fluid">
							<div class="col-xs-10">
								<div class="text-center">Fecha de nacimiento</div>
								<div class="print-information text-center">
									<?php 
										 print_birthdate();
									 ?>
								</div>
							</div>
							<div class="col-xs-2 btn-edit-date">
								<a href="?op=birthdate"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
							</div>							
							<div class="row-fluid">
								<div class="col-xs-12 col-md-12 text-center">
									<?php birthdate(); ?>
								</div>
							</div>
						</div>
					</div>	
					
					<div class="col-xs-12 col-md-6">
						<div class="row-fluid">
							<div class="col-xs-10">
								<div class="text-center">Codigo Postal</div>
								<div class="print-information text-center">
									<?php print_postal_user(); ?>
								</div>
							</div>
							<div class="col-xs-2 btn-edit-date">
								<a href="?op=postal-user"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
							</div>
							<div class="row-fluid">
								<div class="col-xs-12 col-md-12 text-center">
									<?php  postal(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<<div class="row-fluid">
					<div class="col-xs-12 col-md-6">
						<div class="row-fluid">
							<div class="col-xs-10">
								<div class="text-center">Peso (kg)</div>
								<div class="print-information text-center">
									<?php 
										echo $_SESSION["peso"];
									?>
								</div>
							</div>
							<!--div class="col-xs-2 btn-edit-date">
								<a href="?op=weight"><button><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
							</div-->
							<!--div class="row-fluid">
								<div class="col-xs-12 col-md-12 text-center">
									<?php  //weight(); ?>
								</div>
							</div-->	
						</div>
					</div>	
					
					<div class="col-xs-12 col-md-6">
						<div class="row-fluid">
							<div class="col-xs-10">
								<div class="text-center">Estatura (cm)</div>
								<div class="print-information text-center">

									<?php
										echo $_SESSION["estatura"]
									?>
								</div>
							</div>
							<!--div class="col-xs-2">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div-->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--p><a href="?op=foto">Foto</a></p>
		<p><a href="?op=pass">Password</a></p>		
		<p><a href="../salir.php">Salir</a></p-->


</div>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	<script src="../js/slide.js"></script>
	<script>
    		function efectos (){
			//Activar botom 5 MOSTRAR Y APARECER con velocidad
				$('#boton5').on('click', function(){
					$('#parrafo1').toggle(500)
				})
			}
			$(document).ready(efectos)
    	</script>
</body>
</html>