<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
    exit();
}


$user_id = $_SESSION['user_id'];
$payment_method = $_POST['payment_method'];
$order_state = "Pending";

$names = $_POST['item_name'];
$prices = $_POST['price'];
$qtys = $_POST['quantity'];
$imgs = $_POST['img'];

for($i=0; $i<count($names); $i++){

    $name = $names[$i];
    $price = $prices[$i];
    $quantity = $qtys[$i];
    $image = $imgs[$i];

if(!str_contains($image,'.jpg')){
    $image = $image . '.jpg';
}
if(!str_contains($image,'image/')){
    $image= 'image/' . $image;
}

    $sql = "INSERT INTO order_items
    (user_id,item_name,price,quantity,image,payment_method,order_state)
    VALUES
    ('$user_id','$name','$price','$quantity','$image','$payment_method','$order_state')";

    mysqli_query($conn,$sql);
}

# CART CLEAN
// mysqli_query($conn,"DELETE FROM cart WHERE user_id='$user_id'");

// clean sesstion
unset($_SESSION['checkout_items']);
unset($_SESSION['item_name']);
unset($_SESSION['price']);
unset($_SESSION['quantity']);
unset($_SESSION['img']);

# SUCCESS PAGE
header("Location: ../myorder.php");
exit();
?>