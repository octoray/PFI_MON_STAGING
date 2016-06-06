<?php
require("./PHPMailerAutoload.php");

$body1 = "Please see attached files test Night watch that had errors"

function sendemail() {
    $mail = new PHPMailer;
    //$mail->SMTPDebug = 3; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = '203.199.178.220'; // Specify main and backup SMTP servers // 220
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'alerts'; // SMTP username
    $mail->Password = 'alert@123'; // SMTP password //$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted //$mail->Port = 587; // TCP port to connect to
    $mail->From = 'alerts@imimobile.com';
    //$mail->FromName = 'PFI Alert';
    $mail->addAddress('david.wintour@imimobile.com', 'Foobar'); // Add a recipient
    //$mail->addAddress('operations@imimobile.com'); // Name is optional
    //$mail->addAddress('tsg@imimobile.com');
    //$mail->addAddress('TSG@imimobile.com'); // Name is optional // $mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('david.wintour@imimobile.com'); //$mail->addBCC('bcc@example.com'); foreach ($argv as &$value) {
    //$mail->addAttachment("/home/nightwatch/node_modules/nightwatch/examples/reports/tekkatest/".$value;);
}
    $mail->isHTML(true);
// Set email format to HTML
$mail->Subject = 'Test Nightwatch';
$mail->Body = "test123";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    echo "<br>";
    echo "mehhh";
    echo "<br>";
};
sendemail($body1);
?>
