 <?php
	error_reporting(0); 
	session_start();
	$a="ash";
	$c = "ashweenr1998@gmail.com"
 	$body1="hello" ;

 	sent($body1,$c,$a);
 
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
 	$mail->Port = 465;
 	$mail->IsHTML(true);

 	$mail->Username = "ashweenr1998@gmail.com";
 	$mail->Password = "nishan1093";
 	$mail->SetFrom('ashweenr1998@gmail.com', 'QCS Web App');
 	$mail->Subject = "A Transactional Email From Web App from admin";
 	$mail->MsgHTML($body);
 	$mail->AddAddress($address, $name);
	
 	if($mail->Send()) {
 		
		header("Location: ../index.php");
 	} else {
 		echo "MAIL NOT SEND ERROR";
 	}
 }
 ?>