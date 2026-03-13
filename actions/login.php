<?php
session_start();
include 'db.php';

$username = $_POST['name'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id,password,avatar FROM users WHERE name=?");
$stmt->bind_param("s",$username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){

    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username;
        $_SESSION['avatar'] = $user['avatar'];   // ⭐ FIXED

        echo "Login Success";

    } else {
        echo "Wrong Password";
    }

}else{
    echo "User not found";
}
?>