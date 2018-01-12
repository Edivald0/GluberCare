<!DOCTYPE html>
<html>
<head>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Perfil | GluberCare</title>
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
</head>
<body>
<h1>Hola</h1>
	<?php 
session_start(); 
include "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM registro WHERE user_user = '$user' and pass_user = '$password'";
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
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:index.php"); 
            echo "Su usuario es:";
        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
}
?> 

</body>
</html>