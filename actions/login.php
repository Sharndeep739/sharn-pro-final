<?php
session_start();
$conn = new mysqli("localhost","root","BTSsharndeep267","test");

$username = $_POST['name'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id,password FROM users WHERE name=?");
$stmt->bind_param("s",$username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    $user = $result->fetch_assoc();
    
    if(password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username;
        echo "Login Success";
    } else {
        echo "Wrong Password";
    }
}
?>
