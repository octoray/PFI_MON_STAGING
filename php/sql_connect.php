<?php
$serverName = "boron.winprod.lan\sqlexpress, 11500"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"PayForIt", "UID"=>"TSG", "PWD"=>"K33pM0ving");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}
?>