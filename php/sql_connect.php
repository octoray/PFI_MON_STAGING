<?php
try {
//$con = new PDO('odbc:Driver=FreeTDS; Server=full_machinename_or_ip_address\
//   (servername_if_any); Database=db_to_connect; UID=username;PWD=password;);
$con = new PDO('odbc:Driver=FreeTDS; Server=remote_server\mssqlserver;
Database=db_students; UID=db_user; PWD=password123;');
// Now you have connection object. You can query on your db.
// Example to execute ful SQL query
$result = $con->query('SELECT Name FROM dbo.students');
foreach ($result as $row) {
print $row['Name'] . '<br />';
}

// Example to execute stored procedure
$result = $con->query('EXEC dbo.GetAllStudents');
foreach ($result as $row) {
print 'Name: ' . $row['Name'] . ' Grade: ' + $row['Grade'] . '<br />';
}
$con = null;
} catch (PDOException $e) {
echo $e->getMessage();
}

?>