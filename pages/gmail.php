<?php
    session_start();
    $email=$_POST['email'];
    if(isset($_POST['submit']))
    {
        $body1 = "https://achu1998.github.io/org/pages/resetpassword.html";
        $x=explode("@",$email);
        sent($body1,$c,$x[0]);
 
 function sent($body,$address,$name){

  require_once("class.phpmailer.php");
  require_once("class.smtp.php");
  require_once("Exception.php");

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->IsHTML(true);

  $mail->Username = "ashweenr1998@gmail.com";
  $mail->Password = "nishan1093";
  $mail->SetFrom('ashweenr1998@gmail.com', 'QCS Web App');
  $mail->Subject = "reset link";
  $mail->MsgHTML($body);
  $mail->AddAddress($address, $name);
  
  if($mail->Send()) {
    
    header("Location: ../index.html");
  } else {
    echo "MAIL NOT SEND ERROR";
  }
 }
            }

?>