<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendmail($to,$subject,$mass){
	
	$mail = new PHPMailer(true);
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'myonaingoo623@gmail.com'; // Your gmail
	$mail->Password = 'iiqfbygqpcpeybeg'; // Your gmail app password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	$mail->Port = 465;
	`SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`;
	
	$mail->setFrom("myonaingoo623@gmail.com"); // Your gmail
	
	$mail->addAddress($to);
	//$mail->addAttachment('../imgs/p1.jpg', 'new.jpg');    //Optional name
	$mail->isHTML(true);
	
	$mail->Subject =$subject;
	$mail->Body = $mass;
	
	$mail->send();
	
	
	
}







?>






