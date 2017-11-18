<?php
include 'db.php';


$sql = $conn->query("SELECT * FROM new");

if(isset($_GET['action'])){
	$id = $_GET['id'];
	$conn->query("DELETE FROM new where id='$id'");
	
	
	//echo 'Deleted Success';
	header('Location: http://localhost/test/get.php');
	
	
}

?>

<table>
<tbody>
<?php foreach($sql as $row){ 
//print_r($row);
?>
<tr>
<td><?php echo $row['fname'];?></td>
<td> <?php echo $row['lname'];?> </td>
<td> <?php echo $row['email'];?>  </td>
<td> <?php echo $row['password'];?>   </td>
<td>   
<img src="image/<?php echo $row['image'];?>" style="width:50px;height:50px">
</td>
<td><a href="get.php?action=delete&id=<?php echo $row['id'];?>">delete </a></td>
<td><a href="edit.php?id=<?php echo $row['id'];?>">edit</a></td>
</tr>
<?php } ?>
</tbody>
</table>
