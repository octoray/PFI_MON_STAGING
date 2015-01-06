<?php

// PING
function ping($host,$port,$timeout){
$fp = fsockopen($host, $port, $errno, $errstr, $timeout);
if (!$fp) {
    $var1="DOWN";
    return $var1;
} else {
    $var1="UP";
    return $var1;
}};

$ping_pfi_01 = ping("192.168.80.119","80","5");
$ping_pfi_02 = ping("192.168.80.120","80","5");
$ping_pfi_03 = ping("192.168.80.114","80","5");
$ping_pfi_04 = ping("192.168.80.115","80","5");
// $ping_boron = ping("192.168.60.77","445","5");
$ping_titanium = ping("192.168.60.25","80","5");
$ping_chromium = ping("192.168.60.26","80","5");

function colour($ping) {
if($ping == "DOWN"){
    echo "red";
} else {
    echo "greenyellow";
}};
?>



