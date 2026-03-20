<?php
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT id, item_name, price, quantity, image, order_date, status, payment_method, order_state 
FROM order_items 
WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$orders = [];
while($row = $result->fetch_assoc()){
    $orders[] = $row;
}
$stmt->close();
// $conn->close();
?>