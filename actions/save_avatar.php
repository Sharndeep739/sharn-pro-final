<?php
session_start();
include "db.php";

$user_id = $_SESSION['user_id'];
$avatar = $_POST['avatar'];

$sql = "UPDATE users SET avatar='$avatar' WHERE id='$user_id'";
mysqli_query($conn,$sql);

$_SESSION['avatar'] = $avatar;
?>