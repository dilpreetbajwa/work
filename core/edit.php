<?php
include 'db.php';
$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM new where id =$id");
$data = $sql->fetch_object();


if(isset($_POST['update'])){	

$name= $_FILES['image']['name'];
	$uploaddir = 'image/';
$uploadfile = $uploaddir . basename($name);	
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
	
	$stmt = $conn->prepare("UPDATE `new` SET `fname` = ?, `lname` = ?, `email` = ?,  `image`= ? WHERE `id`={$id}");
	$stmt->bind_param('ssss', $_POST['fname'], $_POST['lname'], $_POST['email'], $name);			
	$stmt->execute();
	$stmt->close();
	//header('Location: http://localhost/test/edit.php?id='.$id);
	header( "Refresh:5; http://localhost/test/edit.php?id=".$id, true, 303);
	echo 'success';
}




?>

<html>
<head>
</head>
<body>

<form method="post" enctype="multipart/form-data">
<input type="text" name="fname" value="<?php echo $data->fname;?>"></br>
<input type="text" name="lname" value="<?php echo $data->lname?> "></br>
<input type="email" name="email" value="<?php echo $data->email?> "></br>
<input type="file" name="image"></br>
<input type="submit" name="update" value="update">

</form>
</body>
</html>