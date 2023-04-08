<?php
session_start();

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$subject = $_SESSION["subject"];
$message = $_SESSION["message"];

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

$mail->Username = "your_email";
$mail->Password = "your_pw";

$mail->setFrom($email, $name);
$mail->addAddress("your_email", "GSSI Enterprise");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header('location: contact.php');
