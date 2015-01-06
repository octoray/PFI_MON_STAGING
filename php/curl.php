<?php

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

$curl_pfi_01 = curl("192.168.80.119");
$curl_pfi_02 = curl("192.168.80.120");
$curl_pfi_03 = curl("192.168.80.114");
$curl_pfi_04 = curl("192.168.80.115");
$curl_titanium = curl("192.168.60.25");
$curl_chromium = curl("192.168.60.26");


function colourcurl($curl) {
    if($curl == "DOWN"){
        echo "red";
    } else {
        echo "greenyellow";
    }};
?>