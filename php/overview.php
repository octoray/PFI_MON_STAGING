<?php
$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

mysql_select_db("PFI_MON") or die(mysql_error());

$result = mysql_query("SELECT * FROM overview_count where status = '6' order by id desc limit 1;")
or die(mysql_error());

$result2 = mysql_query("SELECT * FROM overview_count where id = '2'")
or die(mysql_error());

$result2 = mysql_query("SELECT * FROM overview_count where id = '2'")
or die(mysql_error());

$result2 = mysql_query("SELECT * FROM overview_count where id = '2'")
or die(mysql_error());

$result2 = mysql_query("SELECT * FROM overview_count where id = '2'")
or die(mysql_error());

$result2 = mysql_query("SELECT * FROM overview_count where id = '2'")
or die(mysql_error());

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
$row2 = mysql_fetch_array( $result2 );
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