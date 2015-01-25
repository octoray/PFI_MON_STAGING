<?php

// PING
// Function to check response time
function pingDomain($domain){
    $starttime = microtime(true);
    $file      = fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file) $status = 6;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
    }

    $var1 = round($status, 2);
    echo $var1;
}

pingDomain("192.168.80.119")
//pingDomain("192.168.80.120");
//pingDomain("192.168.80.114");
//pingDomain("192.168.80.115");

?>



