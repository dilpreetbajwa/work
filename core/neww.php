<body>
<?php
/* 
    Displays all data from 'users' table
*/
    // connect to the database
    include('../db/connect.php');

    // get results from database
    $result = $MySQLi_CON->query("SELECT * FROM users") 
        or die(mysql_error());  

    // display data in table    
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> <th>ID</th> <th>Username</th> <th>Email</th> <th>Rank</th> <th></th></tr>";

    // loop through results of database query, displaying them in the table
    while($row = $result->fetch_array()) {
        // echo out the contents of each row into a table
    echo "<tr>";
    echo '<td>' . $row['user_id'] . '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td><input type="hidden" name="user_id[]" id="newrank" width="20px" min="0" max="100" value="' . $row['user_id'] . '"></td>';
    echo '<td><form method="POST" action=""><input type="number" name="newrank[]" id="newrank" width="20px" min="0" max="100" value="' . $row['rank'] . '"></form></td>';
    echo '<td><a href="delete.php?id=' . $row['user_id'] . '">Delete</a></td>';
    echo "</tr>"; 
} 
// close table>
echo "</table>";
if(isset($_POST['btn-update'])) {
    for($i = 0; count($_POST["user_id"]); $i++) {
        $_POST['newrank'][$i] = $MySQLi_CON->real_escape_string($_POST['newrank'][$i]); # If this function exists either, if not comment or remove this line!
    $_POST['user_id'][$i] = $MySQLi_CON->real_escape_string($_POST['user_id'][$i]); # If this function exists either, if not comment or remove this line!

    $MySQLi_CON->query('UPDATE users SET rank=' . $_POST['newrank'][$i] . ' WHERE user_id=' . $row['user_id'][$i] . '');

}
echo "Updated the rows.";
}
?>
<br>

<button type="submit" class="btn btn-default" name="btn-update" id="btn-update">Update</button></a>
<p><a href="ny.php">Add a new record</a></p>

</body>
</html> 