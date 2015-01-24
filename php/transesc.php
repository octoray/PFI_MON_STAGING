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
$result1 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '6' ORDER BY id DESC LIMIT 0, 6;")
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
$result2 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '4' ORDER BY id DESC LIMIT 0, 6;")
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




// chart3
$r3 = array();
$result3 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '7' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row3 = mysql_fetch_assoc($result3)) {
    $r3[] = $row3;
}
$c3_amount1 = $r3[0]['amount'];
$c3_amount2 = $r3[1]['amount'];
$c3_amount3 = $r3[2]['amount'];
$c3_amount4 = $r3[3]['amount'];
$c3_amount5 = $r3[4]['amount'];
$c3_amount6 = $r3[5]['amount'];





// chart3
$r4 = array();
$result4 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '8' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row4 = mysql_fetch_assoc($result4)) {
    $r4[] = $row4;
}
$c4_amount1 = $r4[0]['amount'];
$c4_amount2 = $r4[1]['amount'];
$c4_amount3 = $r4[2]['amount'];
$c4_amount4 = $r4[3]['amount'];
$c4_amount5 = $r4[4]['amount'];
$c4_amount6 = $r4[5]['amount'];






// chart3
$r5 = array();
$result5 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '13' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row5 = mysql_fetch_assoc($result5)) {
    $r5[] = $row5;
}
$c5_amount1 = $r5[0]['amount'];
$c5_amount2 = $r5[1]['amount'];
$c5_amount3 = $r5[2]['amount'];
$c5_amount4 = $r5[3]['amount'];
$c5_amount5 = $r5[4]['amount'];
$c5_amount6 = $r5[5]['amount'];






// chart3
$r6 = array();
$result6 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%k:%i') AS 'time', amount FROM PFI_MON.overview_count where STATUS = '19' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row6 = mysql_fetch_assoc($result6)) {
    $r6[] = $row6;
}
$c6_amount1 = $r6[0]['amount'];
$c6_amount2 = $r6[1]['amount'];
$c6_amount3 = $r6[2]['amount'];
$c6_amount4 = $r6[3]['amount'];
$c6_amount5 = $r6[4]['amount'];
$c6_amount6 = $r6[5]['amount'];


//trend
$r7 = array();
$result7 = mysql_query("SELECT AVG(amount) as 'trend' FROM  `PFI_MON`.`overview_count` WHERE STATUS = '6' AND TIME >= NOW() - INTERVAL 11 MINUTE;")
or die(mysql_error());

// store the record of the "example" table into $row
while ($row7 = mysql_fetch_assoc($result7)) {
    $r7[] = $row7;
}
$trend = $r7[0]['trend'];

mysql_close($dbhandle);
?>


