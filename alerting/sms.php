<?php
$url = 'http://172.16.10.31:8081/win-smsgwweb/winmt';
//extract($_POST);

//$url = $_POST["url"];
$c1_time6 = 'bob';

//$ch = curl_init($url);
//curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, 1);

$new = htmlspecialchars('<?xml version=\"1.0\" standalone=\"no\"?>
<!DOCTYPE WIN_DELIVERY_2_SMS SYSTEM \"winbound_messages_v1.dtd\">
<WIN_DELIVERY_2_SMS>
  <!-- E.g. minimal set of elements -->
  <SMSMESSAGE>
    <DESTINATION_ADDR>+14088396711</DESTINATION_ADDR>
    <TEXT><'.$c1_time6.'></TEXT>
    <TRANSACTIONID>111222371</TRANSACTIONID>
    <TYPEID>2</TYPEID>
    <SERVICEID>1</SERVICEID>
    <COSTID>2</COSTID>
<DELIVERYRECEIPT>13</DELIVERYRECEIPT>
    <SOURCE_ADDR>447537403097</SOURCE_ADDR>
  </SMSMESSAGE>
  </WIN_DELIVERY_2_SMS>'
, ENT_QUOTES);

echo $new;

//$post = array(
 //   'User'=>($_POST["user"]),
 //   'Password'=>($_POST["password"]),
 //   'RequestID'=>($_POST["requestid"]),
  //  'TargetURL'=>($_POST["url"]),
  //  'WIN_XML'=>($_POST["content"])
//);

//$query = http_build_query($post);

//curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

//$runy = curl_exec($ch);
//$info = curl_getinfo($ch);
// echo $info['url'];
// echo $info['body'];
// echo $info['request_header'];


// echo $runy;


?>