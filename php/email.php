<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	require_once("PHPMailer/PHPMailerAutoload.php");
	$credentials = parse_ini_file("config/gmail.ini");
	
	$email = $_POST["email_address"];
	$name = $_POST["ename"];
	$url = $_POST["url"];
	$o_message = $_POST["message"];//original message
	
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = $credentials["smtp_url"];
	$mail->Port = "465";
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = $credentials["username"];
	$mail->Password = $credentials["password"];
	$mail->setFrom($email, $name);
	$mail->addAddress($credentials["username"], $credentials["name"]);
	$mail->Subject = "New Portfolio Message From " . $name . "!";
	$message = "URL: <a href = '" . $url . "' target = '_blank'>" . $url . "</a>" . "<br />";
	$message .= "Message: " . $o_message . "<br /><br />";
	$message .= "This message was sent from my e-portfolio website.";
	$mail->msgHTML($message);
	$mail->send();
	
	//redirect to empty contact.php page:
	header("Location: http://marvinserrano.com/EPortfolio/contact.php");
	exit();