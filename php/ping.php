<?php

// PIING
function ping($host,$port,$timeout){
$fp = fsockopen($host, $port, $errno, $errstr, $timeout);
if (!$fp) {
    $var1="DOWN";
    return $var1;
} else {
    $var1="UP";
    return $var1;
}};


// CURL
function curl($host) {
$url = $host;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$con_time = curl_getinfo($ch, CURLINFO_CONNECT_TIME);
$total_time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
//echo $con_time;
//echo "<BR>";
//echo $total_time;
curl_close($ch);
if($httpcode == 200 || $httpcode == 302){
    $var1="UP";
    return $var1;
} else {
    $var1="DOWN";
    return $var1;
}};

$ping = ping("212.71.238.228","80","5");
//echo $ping;

$curl = curl("212.71.238.228");
//echo $curl;

function colour($ping) {
if($ping == "DOWN"){
    echo "red";
} else {
    echo "greenyellow";
}};
//colour($ping);

?>



