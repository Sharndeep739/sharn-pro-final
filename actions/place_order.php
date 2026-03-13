<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_id = $_SESSION['user_id'];
    $cart_id = $_POST['cart_id'] ?? '';
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $state = $_POST['state'] ?? '';
    $city = $_POST['city'] ?? '';
    $pincode = $_POST['pincode'] ?? '';
    $area = $_POST['area'] ?? '';
    $landmark = $_POST['landmark'] ?? '';

    // Validate required fields
    if(empty($name) || empty($phone) || empty($state) || empty($city) || empty($pincode) || empty($area) || empty($landmark)){
        echo "All fields are required!";
        exit();
    }

    // Insert or update existing row for this user_id
    $stmt = $conn->prepare("
        INSERT INTO user_addresses (user_id, name, state, city, pincode, area, landmark)
        VALUES (?, ?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE
            name = VALUES(name),
            state = VALUES(state),
            city = VALUES(city),
            pincode = VALUES(pincode),
            area = VALUES(area),
            landmark = VALUES(landmark)
    ");

    $stmt->bind_param("issssss", $user_id, $name, $state, $city, $pincode, $area, $landmark);

    if($stmt->execute()){
        //change it
        header("Location: ../main.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid access!";
    exit();
}
?>