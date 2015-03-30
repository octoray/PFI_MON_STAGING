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
$result1 = mysql_query('SELECT 	SUM(amount) as amount FROM `PFI_MON`.`overview_count` WHERE STATUS = "'.$_POST['opt'].'" AND TIME >= SYSDATE() - INTERVAL 1 DAY;')
or die(mysql_error());

// store the record of the "example" table into $row
while ($row = mysql_fetch_assoc($result1)) {
    $r1[] = $row;
}
$c1_amount1 = $r1[0]['amount'];





// chart2
$r2 = array();
$result2 = mysql_query('SELECT 	SUM(amount) AS amount FROM `PFI_MON`.`overview_count` WHERE STATUS = "'.$_POST['opt'].'" AND TIME >= SYSDATE() - INTERVAL 2 DAY AND TIME <= SYSDATE() - INTERVAL 1 DAY;')
or die(mysql_error());

// store the record of the "example" table into $row
while ($row2 = mysql_fetch_assoc($result2)) {
    $r2[] = $row2;
}
$c2_amount1 = $r2[0]['amount'];




// chart3
$r3 = array();
$result3 = mysql_query('SELECT 	SUM(amount) AS amount FROM `PFI_MON`.`overview_count` WHERE STATUS = "'.$_POST['opt'].'" AND TIME >= SYSDATE() - INTERVAL 3 DAY AND TIME <= SYSDATE() - INTERVAL 2 DAY;')
or die(mysql_error());

// store the record of the "example" table into $row
while ($row3 = mysql_fetch_assoc($result3)) {
    $r3[] = $row3;
}
$c3_amount1 = $r3[0]['amount'];





mysql_close($dbhandle);
?>


