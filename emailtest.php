<?php

require("./alerting/phpmailer/PHPMailerAutoload.php");


function sendemail($body) {

    $mail = new PHPMailer;

    //WINPLC MAIL
    //mail.from=ngmp-report@winplc.com
    //mail.username=ngmp-report
   //mail.password=j6Zub4as
   // mail.host=192.168.60.103

    //HYDB MAIL
    //mail.from=info@imimobile.com
    //mail.host ="203.199.178.220"
    //mail.auth = true
    //mail.user ="alerts"
    //mail.password ="alert@123"

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '192.168.60.103';  // Specify main and backup SMTP servers // 220
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ngmp-report';                 // SMTP username
    $mail->Password = 'j6Zub4as';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to
    $mail->From = 'report@winplc.com';
    $mail->FromName = 'PFI Alert';
    $mail->addAddress('david.wintour@imimobile.com', 'Foobar');     // Add a recipient
    //$mail->addAddress('TSG@imimobile.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('davidwintour@winplc.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
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
        echo "<br>";
    }};


$email1 = "email tester 123";


sendemail($email1);


?>