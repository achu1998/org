
<!doctype html>
<html lang="en">
<?php
    error_reporting(0); 
    $email = $_POST['email'];
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
    
    header("Location: mails.php");
  } else {
    echo "MAIL NOT SEND ERROR";
  }
 }
            }

?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>Org.Space</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        
    </head>
    <body class="m-0 p-0">
      <div class="container">
                <div class="page-header pt-5 px-5">
        <h2 class="h2 px-5 mt-5 mb-3" style="text-align: center;">
                    RESET MAIL!!
                </h2>
        <center>
          <form action="#" method="#">
         <input type="email" id="emaill" name="email" placeholder="Email" required=""  pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" maxlength="50"><br><br>
               <button style="width: 150px; margin: 0 auto;"  type="submit" name="submit" value="Log In" class="btn btn-dark border-0 shadow-none bg-org-red btn-lg h6 px-3 mt-3"><span class="mx-3">Send</span></button>
      </form>
        </center>       
               


        </div>
        </div>
      </body>
      </html>