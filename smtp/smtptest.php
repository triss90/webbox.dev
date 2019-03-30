<?php
	// Include and initialize PHPMailer
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	$mail = new PHPMailer;

	$server = htmlspecialchars($_POST['server']);
	$port = htmlspecialchars($_POST['port']);
	$security = htmlspecialchars($_POST['security']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$fromEmail = htmlspecialchars($_POST['fromEmail']);
	$toEmail = htmlspecialchars($_POST['toEmail']);

	$mail->isSMTP();

	$mail->SMTPDebug = 2;
	$mail->Host = $server;
	$mail->Port = $port;
	$mail->SMTPAuth = true;
	if ($security == 'ssl' || $security == 'tls') {
		$mail->SMTPSecure = $security;
	}
	$mail->Username = $username;
	$mail->Password = $password;
	$mail->setFrom($fromEmail);
	$mail->addReplyTo('tw@servicepoint.dk', 'ServicePoint');
	$mail->addAddress($toEmail);
	$mail->Subject = 'SMTP test';
	$mail->Body = 'SMTP Settings work as expected... Hurrah...!';

	if (!$mail->send()) {
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message sent!';
	}
?>
