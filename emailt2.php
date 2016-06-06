<?php

require("./alerting/phpmailer/PHPMailerAutoload.php");

function sendemail($body) {

    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '203.199.178.220';  // Specify main and backup SMTP servers // 220
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'alerts';                 // SMTP username
    $mail->Password = 'alert@123';                           // SMTP password                             // TCP port to connect to
    $mail->From = 'alerts@imimobile.com';
    $mail->addAddress('david.wintour@imimobile.com', 'Foobar');     // Add a recipient
    $mail->addCC('davidwintour@winplc.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = 'test email php';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        echo "<br>";
        echo $body;
        echo "<br>";
    }};

$email1 = "Nightwatch test";

sendemail($email1);

?>