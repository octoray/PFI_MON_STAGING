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
$result1 = mysql_query("SELECT 	id, DATE_FORMAT(TIME,'%h:%i') AS 'time', amount FROM PFI_MON.overview_countwhere STATUS = '6' ORDER BY id DESC LIMIT 0, 6;")
or die(mysql_error());

// store the record of the "example" table into $row
while($row = mysql_fetch_array($result1)){
    $first = $row[0]['amount'];
    $second = $row[1]['amount'];
    echo  $row[0]['amount'];
    echo  $row[2]['amount'];
}

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