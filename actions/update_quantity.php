<?php
session_start();
include 'db.php';

if(isset($_POST['cart_id'], $_POST['quantity'])) {

    $cart_id = $_POST['cart_id'];
    $quantity = $_POST['quantity'];

    // Prevent negative or zero
    if($quantity < 1) {
        $quantity = 1;
    }

    $query = "UPDATE cart SET quantity = '$quantity' WHERE id = '$cart_id'";
    mysqli_query($conn, $query);
}

header("Location: ../carts.php");
exit;
?>