<?php
$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("PFI_MON") or die(mysql_error());
$r1 = array();
// chart1
$result1 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_momt WHERE STATUS = 'MT Delivered' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_assoc($result1)) {
    $r1[] = $row;
}
$c1_amount1 = $r1[0]['amount'];
$c1_amount2 = $r1[1]['amount'];
$c1_amount3 = $r1[2]['amount'];
$c1_amount4 = $r1[3]['amount'];
$c1_amount5 = $r1[4]['amount'];
$c1_amount6 = $r1[5]['amount'];

$c1_time1 = $r1[0]['time'];
$c1_time2 = $r1[1]['time'];
$c1_time3 = $r1[2]['time'];
$c1_time4 = $r1[3]['time'];
$c1_time5 = $r1[4]['time'];
$c1_time6 = $r1[5]['time'];





// chart2
$r2 = array();
$result2 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_momt WHERE STATUS = 'MO Successful' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row2 = mysql_fetch_assoc($result2)) {
    $r2[] = $row2;
}
$c2_amount1 = $r2[0]['amount'];
$c2_amount2 = $r2[1]['amount'];
$c2_amount3 = $r2[2]['amount'];
$c2_amount4 = $r2[3]['amount'];
$c2_amount5 = $r2[4]['amount'];
$c2_amount6 = $r2[5]['amount'];

$c2_time1 = $r2[0]['time'];
$c2_time2 = $r2[1]['time'];
$c2_time3 = $r2[2]['time'];
$c2_time4 = $r2[3]['time'];
$c2_time5 = $r2[4]['time'];
$c2_time6 = $r2[5]['time'];
mysql_close($dbhandle);
?>