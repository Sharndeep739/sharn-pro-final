<?php
include 'db.php'; 
 session_start();

$phone = $_POST['phone'];

// Check if phone already registered
$stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
$stmt->bind_param("s", $phone);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows > 0){
    echo json_encode([
        "Status" => "Failed",
        "Message" => "Phone number already registered"
    ]);
    exit();
}
$stmt->close();

//genrate otp

$otp = rand(100000,999999);

$_SESSION['otp'] = $otp;

// 2Factor API URL
// $api_key = "e110dc59-1fc5-11f1-bcb0-0200cd936042";
// $url = "https://2factor.in/API/V1/$api_key/SMS/+91$phone/$otp";

$response = file_get_contents($url);

// echo $response;



// fake OTP code

// session_start(); 


// Fake OTP for testing
// $phone = $_POST['phone'];
// $otp = rand(100000,999999);

// // Store in session (jaise real OTP)
// $_SESSION['otp'] = $otp;

// // Instead of calling real API, just return response like API
// $response = [
//     "Status" => "Success",
//     "Message" => "Fake OTP sent for testing",
//     "OTP" => $otp
// ];

// echo json_encode($response);

?>