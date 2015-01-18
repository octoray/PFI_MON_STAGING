<?php
$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("PFI_MON") or die(mysql_error());

// ESC Overview
$result1 = mysql_query("SELECT * FROM overview_count where status = '6' order by id desc limit 1;")
or die(mysql_error());

$result2 = mysql_query("SELECT * FROM overview_count where status = '4' order by id desc limit 1;")
or die(mysql_error());

$result3 = mysql_query("SELECT * FROM overview_count where status = '7' order by id desc limit 1;")
or die(mysql_error());

$result4 = mysql_query("SELECT * FROM overview_count where status = '8' order by id desc limit 1;")
or die(mysql_error());

$result5 = mysql_query("SELECT * FROM overview_count where status = '13' order by id desc limit 1;")
or die(mysql_error());

$result6 = mysql_query("SELECT * FROM overview_count where status = '19' order by id desc limit 1;")
or die(mysql_error());

// MO MT Overview

$result7 = mysql_query("SELECT * FROM overview_momt where status = 'MO Successful' order by id desc limit 1;")
or die(mysql_error());

$result8 = mysql_query("SELECT * FROM overview_momt where status = 'MT Delivered' order by id desc limit 1;")
or die(mysql_error());

$result9 = mysql_query("SELECT * FROM overview_momt where status = 'Sent, No Final DR Yet' order by id desc limit 1;")
or die(mysql_error());

$result10 = mysql_query("SELECT * FROM overview_momt where status = 'The underlying connection was forcibly closed' order by id desc limit 1;")
or die(mysql_error());

$result11 = mysql_query("SELECT * FROM overview_momt where status = 'The request was aborted' order by id desc limit 1;")
or die(mysql_error());

$result12 = mysql_query("SELECT * FROM overview_momt where status = 'The operation has timed out' order by id desc limit 1;")
or die(mysql_error());


// Other

$result13 = mysql_query("SELECT * FROM overview_other where status = 'Pending/Stuck Transactions' order by id desc limit 1;")
or die(mysql_error());

$result14 = mysql_query("SELECT * FROM overview_other where status = 'ESC Site Hit Count' order by id desc limit 1;")
or die(mysql_error());

$result15 = mysql_query("SELECT * FROM overview_other where status = 'ESC Screenshots' order by id desc limit 1;")
or die(mysql_error());

$result16 = mysql_query("SELECT * FROM overview_other where status = 'IMSI Success' order by id desc limit 1;")
or die(mysql_error());

$result17 = mysql_query("SELECT * FROM overview_other where status = 'IMSI Failed' order by id desc limit 1;")
or die(mysql_error());

$result18 = mysql_query("SELECT * FROM overview_other where status = 'Successful STOPS' order by id desc limit 1;")
or die(mysql_error());

$result19 = mysql_query("SELECT * FROM overview_other where status = 'Failed STOPS' order by id desc limit 1;")
or die(mysql_error());

$result20 = mysql_query("SELECT * FROM overview_other where status = 'Successful Client Notification' order by id desc limit 1;")
or die(mysql_error());

$result21 = mysql_query("SELECT * FROM overview_other where status = 'Failed Client Notification' order by id desc limit 1;")
or die(mysql_error());

// store the record of the "example" table into $row
$row1 = mysql_fetch_array( $result1 );
$row2 = mysql_fetch_array( $result2 );
$row3 = mysql_fetch_array( $result3 );
$row4 = mysql_fetch_array( $result4 );
$row5 = mysql_fetch_array( $result5 );
$row6 = mysql_fetch_array( $result6 );

$row7 = mysql_fetch_array( $result7 );
$row8 = mysql_fetch_array( $result8 );
$row9 = mysql_fetch_array( $result9 );
$row10 = mysql_fetch_array( $result10 );
$row11 = mysql_fetch_array( $result11 );
$row12 = mysql_fetch_array( $result12 );

$row13 = mysql_fetch_array( $result13 );
$row14 = mysql_fetch_array( $result14 );
$row15 = mysql_fetch_array( $result15 );
$row16 = mysql_fetch_array( $result16 );
$row17 = mysql_fetch_array( $result17 );
$row18 = mysql_fetch_array( $result18 );
$row19 = mysql_fetch_array( $result19 );
$row20 = mysql_fetch_array( $result20 );
$row21 = mysql_fetch_array( $result21 );
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