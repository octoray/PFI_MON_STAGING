<?php
$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("PFI_MON") or die(mysql_error());

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

// store the record of the "example" table into $row
$row1 = mysql_fetch_array( $result1 );
$row2 = mysql_fetch_array( $result2 );
$row3 = mysql_fetch_array( $result3 );
$row4 = mysql_fetch_array( $result4 );
$row5 = mysql_fetch_array( $result5 );
$row6 = mysql_fetch_array( $result6 );
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