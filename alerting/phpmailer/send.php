<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'david.wintour@gmail.com';                 // SMTP username
$mail->Password = 'Rtfm123456789';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'david.wintour@gmail.com';
$mail->FromName = 'test';
$mail->addAddress('david.wintour@imimobile.com', 'Joe User');     // Add a recipient
$mail->addAddress('davidwintour@imimobile.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('tsg@imimobile.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML



$mail->Subject = 'Here is the subject';
$mail->Body    =
'<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width"/>
	<style>
	body{
    width:100% !important;
    min-width: 100%;
  -webkit-text-size-adjust:100%;
  -ms-text-size-adjust:100%;
  margin:0;
  padding:0;
  text-align: center;
}
h1 {
    font-family: Trebuchet MS;
    color: deepskyblue;
    text-align: center;
    font-size: 14px;
}
h2 {
    font-family: Trebuchet MS;
    color: black;
    text-align: center;
    font-size: 10px;
}
	</style>
<title>PFI MonitorEmail</title>
</head>
<body>
<h1>PFI Alert Test</h1>
<h2>Test alert 2</h2>
</body>
</html>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>