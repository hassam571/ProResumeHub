<?php

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Sending Email from Local Web Server using PHPMailer			
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';


//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$isSmtp = true;
if ($isSmtp) {
    require 'phpmailer/src/SMTP.php';

    //Enable SMTP debugging
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Set the hostname of the mail server
    $mail->Host = 'your smtp';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = 'html@demo.com';
    //Password to use for SMTP authentication
    $mail->Password = 'Password';
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
}

// Form Fields Value Variables
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = nl2br($message);

//Use a fixed address in your own domain as the from address
$mail->setFrom('html@demo.com', 'You Company Name Or Your Name');

//Set who the message is to be sent to
$mail->addAddress('html@demo.com', 'Test');

$mail->addReplyTo($email, $name);

//Send HTML or Plain Text email
$mail->isHTML(true);

// Message Body
$body_message = "Name: " . $name . "<br>";
$body_message .= "Email: " . $email . "<br><br>";
$body_message .= "\n\n" . $message;

//Set the subject & Body Text
$mail->Subject = "New Message from $name";
$mail->Body = $body_message;

if(!$mail->send()) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} else {
    echo 'Message sent!';
}
