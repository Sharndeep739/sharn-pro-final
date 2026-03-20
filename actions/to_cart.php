<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];

/* 1️⃣ Check if product already exists */
$check = "SELECT * FROM cart 
          WHERE user_id='$user_id' 
          AND product_name='$name'
          AND price='$price'
          AND image='$image'";

$result = mysqli_query($conn, $check);

if(mysqli_num_rows($result) > 0) {

    // 2️⃣ If exists → increase quantity
    $update = "UPDATE cart 
           SET quantity = quantity + 1 
           WHERE user_id='$user_id' 
           AND product_name='$name'
           AND price='$price'
           AND image='$image'";
    
    mysqli_query($conn, $update);

    echo "Quantity Updated";

} else {

    // 3️⃣ If not exists → insert new row
    $insert = "INSERT INTO cart 
               (user_id, product_name, price, image, quantity)
               VALUES 
               ('$user_id', '$name', '$price', '$image', 1)";
    
    mysqli_query($conn, $insert);

    echo "Item Added";
}
?>