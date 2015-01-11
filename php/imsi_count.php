<?php
$username = "pfimonuser";
$password = "Fa6rUCha";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

mysql_select_db("PFI_MON") or die(mysql_error());

$result = mysql_query("SELECT * FROM test")
or die(mysql_error());


// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry
print_r($row);
echo $row;
echo "Name: ".$row['date_time'];
//echo " Age: ".$row['age'];
?>