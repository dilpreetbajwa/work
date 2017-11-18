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
	
	
	if($_GET){
		$email = $_GET['email'];
		$password = $_GET['pwd'];
		
	   	$sql = "INSERT INTO new (email, password)
		VALUES ('$email', '$password')";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}
	
	
	
	
	
	
	
	
	
?>