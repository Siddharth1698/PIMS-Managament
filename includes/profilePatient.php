<?php
include "db.php";
 
// Accessing session data
$uid = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE user_id=$uid";
mysqli_query($connection, $sql);
echo "$uid";

?>