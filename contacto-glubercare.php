<?php

$errorMSG = '';

foreach ( $_POST as $key => $value ) {

	if ( empty( $_POST[$key] ) ) {
		$errorMSG .= $key.' es obligatorio <br>';
	} else {
		${$key} = $_POST[$key];
	}

}

$emailTo = 'contacto@gluber.care';
$emailSubject = "Nuevo mensaje | contacto@gluber.care";

$body = "";
$body .= "Nombre: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Mensaje: ";
$body .= $message;
$body .= "\n";

$success = mail( $emailTo, $emailSubject, $body, "From:".$email );

if ( $success && $errorMSG === '' ){
   echo 'Gracias por escribirnos. Nos pondremos en contacto con usted tan pronto sea posible.';
} else {
    if ( $errorMSG === "" ){
        echo "Ha ocurrido un error";
    } else {
        echo $errorMSG;
    }
}