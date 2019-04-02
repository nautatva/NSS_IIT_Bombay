<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require("./PHPMailer/src/PHPMailer.php");
    require("./PHPMailer/src/SMTP.php");
    require("./PHPMailer/src/Exception.php");

if (isset( $_GET['query'])) {
$query =  $_GET['query'];
   if ($query == 'teach') {
      $mail->AddAddress('nss.iitb@');
      $mail->AddCC('yash', $name);
   }
    
    

  $mail = new PHPMailer();
  $mail->SMTPDebug = 4;
  $mail->IsSMTP(); // enable SMTP

  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp-auth.iitb.ac.in";
  $mail->Port = 25; // or 465
  $mail->IsHTML(true);
 
  $mail->Subject = $query + 'portal';
  $mail->Body = "Name:" + $_GET['name'] + "\n" +  "Email:" + $_GET['email'] + "\n" + "phone:" + $_GET['phone'] + "\n" + "Body:" + $_GET['body'];
  
  $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};

   if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      echo "Message has been sent";
   }
}
else {
    echo("complete failure");
  }
?>