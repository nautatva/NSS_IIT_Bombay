<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// require 'src/Exception.php';
// require 'src/PHPMailer.php';
// require 'src/SMTP.php';

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/SMTP.php";
require "./PHPMailer/src/Exception.php";

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 3; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = "queries.nssiitb@gmail.com";
  $mail->Password = "thisisaspareaccount";
  $mail->SetFrom(" queries.nssiitb@gmail.com",'Quesries');
// $mail->setFrom($emailFrom, $emailFromName);
$mail->addAddress('nnautatva@gmail.com', 'Nautatva');
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}
?>