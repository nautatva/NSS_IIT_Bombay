<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require("./PHPMailer/src/PHPMailer.php");
    require("./PHPMailer/src/SMTP.php");
    require("./PHPMailer/src/Exception.php");

if (isset($_GET['to'])) {

    $to=$_GET['to'];
    

  $mail = new PHPMailer();
  $mail->SMTPDebug = 4;
  $mail->IsSMTP(); // enable SMTP

  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; // or 465
  $mail->IsHTML(true);
  $mail->Username = "queries.nssiitb@gmail.com";
  $mail->Password = "thisisaspareaccount";
  $mail->SetFrom(" queries.nssiitb@gmail.com");
  $mail->Subject = "Test";
  $mail->Body = "hello";
  $mail->AddAddress($to);
  
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