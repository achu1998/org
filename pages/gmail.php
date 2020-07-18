<?php
    

  require_once("class.phpmailer.php");
  require_once("class.smtp.php");
  require_once("Exception.php");

  $mail = new PHPMailer(); 
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls'; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; 
$mail->IsHTML(true);
$mail->Username = "ashweenr1998@gmail.com";
$mail->Password = "nishan1093";
$mail->SetFrom("ashweenr1998");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("crazyideaz1998@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

?>