<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'test';


//$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);  //mysqli
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);    //PDO

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/*
mysql
mysqli
pdo*/

?>

