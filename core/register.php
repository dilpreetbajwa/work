<?php
include 'db.php';
if($_POST){
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	echo $sql = "INSERT INTO dill (fname, lname, email, password )
VALUES ('$fname', '$lname','$email', '$password')";
die;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
}

}
?>


<html>
<head>


</head>
<body>


<form  method="post" >
<label>First Name:</label>
<input type="text" name="fname"></br>
<label>last Name:</label>
<input type="text" name="lname"></br>
<label>email:</label>
<input type="email" name="email"></br>
<label>password:</label>
<input type="password" name="password"></br>
<input type="submit" name="submit"></br>


</form>
</body>
</html>