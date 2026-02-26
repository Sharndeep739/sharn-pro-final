<?php
session_start();
include 'db.php';

if(isset($_POST['id']) && isset($_SESSION['user_id'])) {

    $id = intval($_POST['id']);          // cart row id
    $user_id = $_SESSION['user_id'];    // logged in user

    $query = "DELETE FROM cart 
              WHERE id = '$id' 
              AND user_id = '$user_id'";

    if(mysqli_query($conn, $query)){
        header("Location: /testphp/carts.php");  // apna cart page name yahan likho
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    header("Location: /testphp/carts.php");
    exit();
}
?>