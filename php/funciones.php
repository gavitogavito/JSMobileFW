<?php
	session_start();
	$url_gen = $_SERVER['HTTP_HOST'].'/';
	
	$administrator = "joaquinalaguive@gmail.com";
	// validacion de vida para las sessiones 
		date_default_timezone_set('America/Argentina/Buenos_Aires');	

	// header('Access-Control-Allow-Origin: *');
	@require 'mailer/PHPMailerAutoload.php';    

	$h = $_POST['h']; //$_POST['h'];

	$r['host'] = $_SERVER['HTTP_HOST'];

	switch ($h) 
	{
		case "_test":
		break;

		default:
			echo ' Propiedad privada, get out :P ';
		break;
	}

	$r['termina'] = $h;
	echo json_encode($r);
?>



