<?php

// Server in the this format: <computer>\<instance name> or
// <server>,<port> when using a non default port number
$server = 'boron.winprod.lan\11500';

// Connect to MSSQL
$link = mssql_connect($server, 'TSG', 'K33pM0ving');

if (!$link) {
    die('Something went wrong while connecting to MSSQL');
}else{
    echo "connected fine :)";
}
?>