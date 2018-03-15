<?php

	require_once "Twilio/autoload.php";
	require 'Services/Twilio.php';

	use Twilio\Rest\Client;

	if (empty($_POST['name']) && empty($_POST['email'])) {
		header('refresh:1; url=index.php');
	} else {
		$nombre = $_POST['name'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$medio = $_POST['medio'];
		$codigo = $_POST['codigo'];
		$bcc =  "Bcc: " . "\r\n";
		$email_usuario = $email;
		$cuerpomensaje = "Nombre: " . $nombre . "\n" . "E-Mail: " . $email . "\n" . "Telefono: " . $telefono . "Medio en que se entero: " . $medio;
		mail("correo_a_llegar", "Asunto_del_correo", $cuerpomensaje,'From:'. $email . "\r\n".$bcc);
		// header('refresh:2; url=index.php');

		if ($email_usuario = $email ){

			$telefono_usuario = $telefono;
			$mensajefest = "Prenseta el codigo ";
			$partesu = "en el centro de canje: ";

			  // Your Account Sid and Auth Token from twilio.com/user/account
			  $sid = "AC38ee176adf609f2203d2de3bfc85 proporcionadas por twilio";
			  $token = "f5ba011a9c50498bcdf6143cffc9 Proporcionadas por twilio";
			  $to = $telefono_usuario;
			  $client = new Client($sid, $token);
			  $client->messages->create( $to, array(
			    'from' => "+50230000851 numero virtual",
			    'body' => $mensajefest . $partesu . $codigo
			  ));
		} else {
			echo "Ya ha participado una ves";
		}
	}

?>



<center><h3>Gracias por escribirnos. Le enviaremos una respuesta a la brevedad posible</h3></center>
