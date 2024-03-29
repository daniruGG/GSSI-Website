<?php
session_start();
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["subject"] = $_POST["subject"];
$_SESSION["message"] = $_POST["message"];


if (!str_contains($_SESSION["name"], "Mike") == true) {
    if (isset($_POST['submit'])) {
        $secret = 'your google captcha secret key';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
        $data = file_get_contents($url);
        $row = json_decode($data, true);
        if ($row['success'] == true) {
            $_SESSION['sent'] = "Thank you! We'll get back to you soon.";
            header('location: send-email.php');
        } else {
            $_SESSION['failed'] = "Please check the captcha.";
            header('location: contact.php');
        }
    }
} else {
    $_SESSION['failed'] = "An error occurred while sending your email. Please contact us using our email provided.";
    header('location: contact.php');
}
