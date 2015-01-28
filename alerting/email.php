<?php

require("./phpmailer/PHPMailerAutoload.php");
require("emailbody.php");

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '192.168.60.120';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = false;                               // Enable SMTP authentication
//$mail->Username = 'david.wintour@gmail.com';                 // SMTP username
//$mail->Password = 'Rtfm123456789';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

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
$mail->Body    = $email1;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo "<br>";
    print_r($mail);
} else {
    echo 'Message has been sent';
}
?>