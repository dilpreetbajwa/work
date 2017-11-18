<?php
include 'db.php';
//echo date('Y-m-d h:m:s');
if($_GET){
	
	/*$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);*/

	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$email = $_GET['email'];
	$password = md5($_GET['password']);
	$name= $_FILES['image']['name'];
	$uploaddir = 'image/';
$uploadfile = $uploaddir . basename($name);	
	move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

//print_r($_FILES);
//die;
	$sql = "INSERT INTO new (fname, lname, email, password, image)
VALUES ('$fname', '$lname','$email', '$password', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	/*$sql = "INSERT INTO test (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;*/
}



}
?>


<html>
<head>

<!-- uhsdbvjkfdc -->
</head>
<body>

<!--<form method="post" >
<input type="text" name="name"></br>
<input type="email" name="email"></br>
<input type="password" name="password"></br>
<input type="file" name="image"></br>
<input type="submit" name="submit"></br>-->

<form  method="get"  enctype="multipart/form-data">
<input type="text" name="fname"></br>
<input type="text" name="lname"></br>
<input type="email" name="email"></br>
<input type="password" name="password"></br>
<input type="file" name="image"></br>
<input type="submit" name="submit"></br>


</form>
</body>
</html>