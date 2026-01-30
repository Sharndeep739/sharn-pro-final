<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Simple output
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";

    // Here you can also connect to MySQL to save the data
    $conn = new mysqli("localhost", "root", "BTSsharndeep267", "test");
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";
    $conn->query($sql);
    $conn->close();

} else {
    echo "Please submit the form first.";
}
?>
