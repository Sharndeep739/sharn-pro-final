<?php
session_start();
include 'db.php';


$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = $_POST['phone'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO users (name,password,phone,email) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$name,$password,$phone,$email);


if($stmt->execute()){
 $_SESSION['username'] = $name;
    $_SESSION['user_id'] = $conn->insert_id;

   

} 
$conn->query($sql);

?>
