<?php

// PING
function ping($host,$port,$timeout){
    $starttime = microtime(true);
    $fp = fsockopen($host, $port, $errno, $errstr, $timeout);
    if (!$fp) {
        $stoptime  = microtime(true);
        $status = ($stoptime - $starttime) * 1000;
        echo $status;
    }};

ping("192.168.80.119","80","5");


?>



