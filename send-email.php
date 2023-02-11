<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "your email";
$mail->Password = "your pw";

$mail->setFrom($email, $name);
$mail->addAddress("your email", "GSSI Enterprise");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

session_start();
$_SESSION['status'] = "Thank you! We'll get back to you soon.";
header('location: contact.php');
