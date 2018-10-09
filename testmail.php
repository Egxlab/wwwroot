<?php
include '/engine/payment/engine/function/mail.php';
include 'config.php';
ini_set("SMTP","palm.arvixe.com");
ini_set("sendmail_from", "info@flankera.com");
ini_set("smtp_port", "465");
ini_set("auth_username", "info@flankera.com");
ini_set("auth_password", "3343402Az");
$to = "ididitmyway6@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: info@flankera.com" ;

mail($to,$subject,$txt,$headers);
//SMTP port number is for SSL 465 or 25 or 587 (without SSL) 

//SMTP server is palm.arvixe.com
//$m = new Mail($config);
//$m ->sendMail("ididitmyway6@gmail.com","hello","hello world","");
?>