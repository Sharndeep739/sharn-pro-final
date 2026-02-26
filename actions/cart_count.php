<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}

// Cart Count Logic
include "actions/db.php"; // db connection

$cart_count = 0;

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];

    $query = mysqli_query($conn, 
        "SELECT COUNT(*) as total FROM cart WHERE user_id = '$user_id'"
    );

    $data = mysqli_fetch_assoc($query);

    if($data['total'] != NULL){
        $cart_count = $data['total'];
    }
}
?>