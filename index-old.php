<?php
// Required if your environment does not handle autoloading
require_once "Twilio/autoload.php";
require 'Services/Twilio.php';


use Twilio\Rest\Client;

  // Your Account Sid and Auth Token from twilio.com/user/account
  $sid = "AC38ee176adf609f2203d2de3bfc85080f";
  $token = "f5ba011a9c50498bcdf6143cffc9fd82";
  $to = "numero usuario";
  $client = new Client($sid, $token);
  $client->messages->create( $to, array(
    'from' => "numero virtual alquilado",
    'body' => "Su codigo de verificacion es:"
  ));
?>
