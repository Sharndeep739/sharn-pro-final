<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $order_id = $_POST['order_id'];
    $report = $_POST['report'];

    $sql = "UPDATE order_items SET report = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $report, $order_id);

    if($stmt->execute()){
        echo "Report sent successfully 😄";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>