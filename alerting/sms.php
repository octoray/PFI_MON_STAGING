<?php
$url = 'http://172.16.10.31:8081/win-smsgwweb/winmt';
//extract($_POST);

//$url = $_POST["url"];
$c1_time6 = "bob";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);

$new = htmlspecialchars('<?xml version="1.0" standalone="no"?>
<!DOCTYPE WIN_DELIVERY_2_SMS SYSTEM "winbound_messages_v1.dtd">
<WIN_DELIVERY_2_SMS>
  <!-- E.g. minimal set of elements -->
  <SMSMESSAGE>
    <DESTINATION_ADDR>+447961832063</DESTINATION_ADDR>
    <TEXT>'.$c1_time6.'</TEXT>
    <TRANSACTIONID>0123456789</TRANSACTIONID>
    <TYPEID>2</TYPEID>
    <SERVICEID>46</SERVICEID>
    <COSTID>3051</COSTID>
<DELIVERYRECEIPT>13</DELIVERYRECEIPT>
    <SOURCE_ADDR>PFIMONITOR</SOURCE_ADDR>
  </SMSMESSAGE>
  </WIN_DELIVERY_2_SMS>'
, ENT_QUOTES);

//echo $new;

$post = array(
    'User'=>('david'),
    'Password'=>('david'),
    'RequestID'=>('123456789'),
    'TargetURL'=>($url),
    'WIN_XML'=>($new)
);

$query = http_build_query($post);

curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

$runy = curl_exec($ch);
$info = curl_getinfo($ch);
// echo $info['url'];
// echo $info['body'];
// echo $info['request_header'];


// echo $runy;


?>