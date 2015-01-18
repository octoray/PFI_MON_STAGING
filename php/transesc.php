<?php
$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("PFI_MON") or die(mysql_error());
$r = array();
// ESC Overview
$result1 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%h:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '6' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_assoc($result1)) {
    $r[] = $row;
}
$amount1 = $r[0]['amount'];
$amount2 = $r[1]['amount'];
$amount3 = $r[2]['amount'];
$amount4 = $r[3]['amount'];
$amount5 = $r[4]['amount'];
$amount6 = $r[5]['amount'];

$time1 = $r[0]['time'];
$time2 = $r[1]['time'];
$time3 = $r[2]['time'];
$time4 = $r[3]['time'];
$time5 = $r[4]['time'];
$time6 = $r[5]['time'];
// Print out the contents of the entry
//print_r($row);
//echo $row;
//echo $row['status'];
//echo $row['amount'];
//echo $row2['amount'];
//echo $row2['status'];
//echo " Age: ".$row['age'];
mysql_close($dbhandle);
?>