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


//email1
mysql_select_db("PFI_MON") or die(mysql_error());
$r1 = array();
// chart1
$result1 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_count` WHERE STATUS = '6' AND TIME >= NOW() - INTERVAL 60 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_assoc($result1)) {
    $r1[] = $row;
}
$amount1 = $r1[0]['amount'];
$word1 = 'NO Successfull PFI tranactions in last 45 minutes!';


// email2
$r2 = array();
$result2 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_other` WHERE STATUS = 'ESC Screenshots' AND TIME >= NOW() - INTERVAL 60 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row2 = mysql_fetch_assoc($result2)) {
    $r2[] = $row2;
}
$amount2 = $r2[0]['amount'];
$word2 = 'NO Successfull PFI Screenshots in last 60 minutes!';



// email3
$r3 = array();
$result3 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_other` WHERE STATUS = 'ESC Site Hit Count' AND TIME >= NOW() - INTERVAL 30 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row3 = mysql_fetch_assoc($result3)) {
    $r3[] = $row3;
}
$amount3 = $r3[0]['amount'];
$word3 = 'PFI ESC Site hits 0 in last 30 minutes!';


// email4
$r4 = array();
$result4 = mysql_query("SELECT AVG(amount) AS 'amount' FROM  `PFI_MON`.`overview_other` WHERE STATUS = 'Pending/Stuck Transactions' AND TIME >= NOW() - INTERVAL 60 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row4 = mysql_fetch_assoc($result4)) {
    $r4[] = $row4;
}
$amount4 = $r4[0]['amount'];
$word4 = 'PFI Pending Transaction count high! '.$amount4.' in last 60 minutes!';



// email5
$r5 = array();
$result5 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_momt` WHERE STATUS = 'MT Delivered' AND TIME >= NOW() - INTERVAL 60 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row5 = mysql_fetch_assoc($result5)) {
    $r5[] = $row5;
}
$amount5 = $r5[0]['amount'];
$word5 = 'no mt delivered last hour';






function sendemail($body) {

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '203.199.178.220';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'alerts';                 // SMTP username
    $mail->Password = 'alert@123';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to
    $mail->From = 'info@imimobile.com';
    $mail->FromName = 'info';
    $mail->addAddress('david.wintour@imimobile.com', 'Foobar');     // Add a recipient
    $mail->addAddress('operations@imimobile.com');               // Name is optional
    //$mail->addAddress('TSG@imimobile.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('david.wintour@imimobile.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                   // Set email format to HTML



$mail->Subject = 'PFI ALERT';
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




if($amount1 < "1"){
    sendemail($email1);
} else {
    echo "<br>";
    echo "nothing to send";
};


if($amount2 < "1"){
    sendemail($email2);
} else {
    echo "<br>";
    echo "nothing to send";
};

if($amount3 < "10"){
    sendemail($email3);
} else {
    echo "<br>";
    echo "nothing to send";
};

if($amount4 > "30"){
    sendemail($email4);
} else {
    echo "<br>";
    echo "nothing to send";
};


if($amount5 < "1"){
    sendemail($email5);
} else {
    echo "<br>";
    echo "nothing to send";
};

?>