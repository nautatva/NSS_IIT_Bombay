<?php

if (isset($_GET['to'])) {

$to=$_GET['to'];
	
// $to = $email;
$subject = "You are now registered for CENEx/Aakaar 2019";
$message = "Hello " . $name . ",<br>";
$message .= "Greetings from Aakaar 2019, IIT Bombay <br><br>";
$message .= "Thank you for registering in CENEx<br>";
$message .= "Your registration Team ID is <b>" . $aakaar_id . "</b><br> Take a note of Team ID since it will be used for all  further occasions.<br>";
$message .= "<br>We hope to see you at Aakaar 2019 this year.<br><br>";
$message .= "For any further queries feel free to contact <a href='nenavathdharam008@gmail.com?Subject=Registration%20Issue' target='_top'>nenavathdharam008@gmail.com</a>";

$header = "From: eventsaakaar2k19@gmail.com \r\n";

$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
echo $to;
echo "<br>";
echo $subject;
echo "<br><br>";
echo $message;
echo "<br><br>";

$retval = mail($to, $subject, $message, $header);
echo $retval;
}
else {
  echo("complete failure");
}
?>