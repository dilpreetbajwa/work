<? php
include 'db.php';
if($_POST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	
	$sql = "INSERT INTO test (name, email, password)
VALUES ('$name', '$email', '$password')";

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

<form action="new 2.php" method="post" enctype="multipart" >
<input type="text" name="fname"></br>
<input type="text" name="lname"></br>
<input type="email" name="email"></br>
<input type="password" name="password"></br>
<input type="file" name="image"></br>
<input type="submit" name="submit"></br>

</form>
</body>
</html>