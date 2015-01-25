<?php

// PING
// Function to check response time
function pingDomain($domain){
    $starttime = microtime(true);
    $file      = fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file) $status = -1;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status2 = ($stoptime - $starttime);
        $status3 = ($stoptime - $starttime) * 10;
        $status = floor($status);
    }
    echo $status;
    echo "<br>";
    echo $starttime;
    echo "<br>";
    echo $stoptime;
    echo "<br>";
    echo $status2;
    echo "<br>";
    echo $status3;
}

pingDomain("192.168.80.119");


?>



