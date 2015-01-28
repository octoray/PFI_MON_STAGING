<?php

require("./phpmailer/PHPMailerAutoload.php");
require("emailbody.php");



//MYSQL

$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";


//sms1
mysql_select_db("PFI_MON") or die(mysql_error());
$r1 = array();
// chart1
$result1 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_count` WHERE STATUS = '6' AND TIME >= NOW() - INTERVAL 45 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_assoc($result1)) {
    $r1[] = $row;
}
$amount1 = $r1[0]['amount'];


// sms2
$r2 = array();
$result2 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_other` WHERE STATUS = 'ESC Screenshots' AND TIME >= NOW() - INTERVAL 33 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row2 = mysql_fetch_assoc($result2)) {
    $r2[] = $row2;
}
$amount2 = $r2[0]['amount'];
$word2 = 'NO Successfull PFI Screenshots in last 30 minutes!';






function sendemail($body) {

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'david.wintour@gmail.com';                 // SMTP username
$mail->Password = 'Rtfm123456789';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->From = 'david.wintour@gmail.com';
$mail->FromName = 'PFI Monitor';
$mail->addAddress('david.wintour@imimobile.com', 'Joe User');     // Add a recipient
//$mail->addAddress('davidwintour@imimobile.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('tsg@imimobile.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML



$mail->Subject = 'Here is the subject';
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}};




if($amount1 < "1"){
    sendemail($email1);
} else {
    echo "nothing to send";
};



?>