<?php

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
$result1 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_count` WHERE STATUS = '6' AND TIME >= NOW() - INTERVAL 33 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_assoc($result1)) {
    $r1[] = $row;
}
$amount1 = $r1[0]['amount'];
$word1 = 'NO Successfull tranactions in last 30 minutes!';


// sms2
$r2 = array();
$result2 = mysql_query("SELECT SUM(amount) AS 'amount' FROM  `PFI_MON`.`overview_other` WHERE STATUS = 'ESC Screenshots' AND TIME >= NOW() - INTERVAL 33 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row2 = mysql_fetch_assoc($result2)) {
    $r2[] = $row2;
}
$amount2 = $r2[0]['amount'];
$word2 = 'NO Successfull Screenshots in last 30 minutes!';


$url = 'http://172.16.10.31:8081/win-smsgwweb/winmt';




$new1 = '<?xml version="1.0" standalone="no"?>
<!DOCTYPE WIN_DELIVERY_2_SMS SYSTEM "winbound_messages_v1.dtd">
<WIN_DELIVERY_2_SMS>
  <!-- E.g. minimal set of elements -->
  <SMSMESSAGE>
    <DESTINATION_ADDR>+447961832063</DESTINATION_ADDR>
    <TEXT><![CDATA['.$word1.']]></TEXT>
    <TRANSACTIONID>0123456789</TRANSACTIONID>
    <TYPEID>2</TYPEID>
    <SERVICEID>46</SERVICEID>
    <COSTID>3051</COSTID>
<DELIVERYRECEIPT>0</DELIVERYRECEIPT>
    <SOURCE_ADDR>PFIMONITOR</SOURCE_ADDR>
  </SMSMESSAGE>
  </WIN_DELIVERY_2_SMS>';


$new2 = '<?xml version="1.0" standalone="no"?>
<!DOCTYPE WIN_DELIVERY_2_SMS SYSTEM "winbound_messages_v1.dtd">
<WIN_DELIVERY_2_SMS>
  <!-- E.g. minimal set of elements -->
  <SMSMESSAGE>
    <DESTINATION_ADDR>+447961832063</DESTINATION_ADDR>
    <TEXT><![CDATA['.$word2.']]></TEXT>
    <TRANSACTIONID>0123456789</TRANSACTIONID>
    <TYPEID>2</TYPEID>
    <SERVICEID>46</SERVICEID>
    <COSTID>3051</COSTID>
<DELIVERYRECEIPT>0</DELIVERYRECEIPT>
    <SOURCE_ADDR>PFIMONITOR</SOURCE_ADDR>
  </SMSMESSAGE>
  </WIN_DELIVERY_2_SMS>';



function sendmessage($xml) {
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);

$post = array(
    'User'=>('david'),
    'Password'=>('david'),
    'RequestID'=>('123456789'),
    'TargetURL'=>($url),
    'WIN_XML'=>($xml)
);

$query = http_build_query($post);

curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

$runy = curl_exec($ch);
$info = curl_getinfo($ch);
echo '<br>';
echo $info['url'];
echo '<br>';
echo $info['body'];
echo '<br>';
echo $info['request_header'];
echo '<br>';

echo $runy;
}

    if($amount1 < "1"){
        sendmessage($new1);
    } else {
    echo "nothing to send";
};

if($amount2 < "1"){
    sendmessage($new2);
    } else {
    echo "nothing to send";
};

?>