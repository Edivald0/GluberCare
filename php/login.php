<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registro | gluberCare</title>
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
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-- Flexslider -->
		<link rel="stylesheet" href="css/flexslider.css">
		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
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
	<div class="gtco-loader"></div>
	<div class="container-login">
		<header>
			<div id="page page-2">
				<!-- MAIN MENU -->
				<nav class="gtco-nav" role="navigation">
					<div class="container">
						<div class="row">
							<div class="col-sm-2 col-xs-12">
								<!--div id="gtco-logo"><a href="index.html">Just<em>ice</em></a></div-->
								<div id="gtco-logo" class="logo-home"><a href="http://gluber.care"><img src="images/gluber_care-01.png"></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1 main-nav">
								<ul>
									<li class=""><a href="index.html" class="external">Inicio</a></li>
									<!--li><a href="http://gluber.care#about-2" class="external">Nosotros</a></li>
									<li><a href="#" data-nav-section="servicios">Servicios</a></li>
									<li><a href="registro.php" class="external active">Registro</a></li>
									<li><a href="#" data-nav-section="contact">Contacto</a></li-->
									<!--li class="btn-cta"><a href="#" data-nav-section="contact"><span>Contacto</span></a></li-->
									<!-- For external page link -->
									<!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
				<!-- END MENU -->

				<!--section id="gtco-hero" class="gtco-cover" data-section="home"  data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-md-offset-0 text-center">
								<div class="display-t">
									<div class="display-tc">
										<h1 class="animate-box" data-animate-effect="fadeIn"></h1>
										<h2><a href="registro.php"></a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section-->
				<section id="gtco-hero" class="" data-section="home"  data-stellar-background-ratio="0.5">
					<div class="slideshow">
						<ul class="slider">
							<li>
								<img src="images/banner_glubercare_final.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<img src="images/banner_glubercare_2.jpg" alt="" class="img-responsive">
							</li>
						</ul>
					<ol class="pagination"></ol>
					<div class="left">
						<i class="fa fa-chevron-left"></i>
					</div>
					<div class="right">
						<i class="fa fa-chevron-right"></i>
					</div>
				</div>	
			</section>
		</header>	
		
		<section class="container-fluid formulario-login">
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
					<a href="registro.php"><button class="submit-account">Crear Cuenta</button></a>
				</div>
			</div>
		</section>
	</div>	

			<footer id="gtco-footer" role="contentinfo">
				<div class="container">
					<div class="row copyright">
						<div class="col-md-12">
							<p class="pull-left">
								<small class="block">&copy; 2017 | gluberCare</small> 
								<!--small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small-->
							</p>
							<p class="pull-right">
								<ul class="gtco-social-icons pull-right">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</footer>
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script src="js/slide.js"></script>
</body>
</html>