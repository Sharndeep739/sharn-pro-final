<!-- <?php
session_start();
include 'actions/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}
if(isset($_POST['id'], $_POST['name'], $_POST['price'], $_POST['img'], $_POST['quantity'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $quantity = $_POST['quantity'];
} else {
    // Agar direct visit hua, redirect kar do cart page pe
    header("Location: carts.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch phone and fullname from users table
$user_query = mysqli_query($conn, "SELECT name, phone FROM users WHERE id = '$user_id'");
$user_data = mysqli_fetch_assoc($user_query);

// Check if user already has an address
$address_query = mysqli_query($conn, "SELECT * FROM user_addresses WHERE user_id = '$user_id' LIMIT 1");
$address_data = mysqli_fetch_assoc($address_query);

// If address exists, use it, else empty fields
$prefill = [
    'name' => $address_data['name'] ?? $user_data['name'],
    'phone' => $address_data['phone'] ?? $user_data['phone'],
    'state' => $address_data['state'] ?? '',
    'city' => $address_data['city'] ?? '',
    'pincode' => $address_data['pincode'] ?? '',
    'area' => $address_data['area'] ?? '',
    'landmark' => $address_data['landmark'] ?? '',
];


$cart_id = $_GET['cart_id'] ?? '';
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<link rel="stylesheet" href="css/buy_now.css">
</head>
<body>
<header>

</header>

<div class="container">
<h2>Address</h2>

<form method="POST" action="actions/place_order.php" class="checkout-form">
    <input type="hidden" name="cart_id" value="<?php echo htmlspecialchars($cart_id); ?>">

 
    <input type="text" name="name" placeholder="Full Name" required
           value="<?php echo htmlspecialchars($prefill['name']); ?>">

    <input type="text" name="phone" placeholder="Phone Number" required
           value="<?php echo htmlspecialchars($prefill['phone']); ?>">

    <input type="text" name="state" placeholder="State" required
           value="<?php echo htmlspecialchars($prefill['state']); ?>">

    <input type="text" name="city" placeholder="City" required
           value="<?php echo htmlspecialchars($prefill['city']); ?>">

    <input type="number" name="pincode" placeholder="Pin Code" required
           value="<?php echo htmlspecialchars($prefill['pincode']); ?>">

    <input type="text" name="area" placeholder="Area" required
           value="<?php echo htmlspecialchars($prefill['area']); ?>">

    <input type="text" name="landmark" placeholder="Famous shop" required
           value="<?php echo htmlspecialchars($prefill['landmark']); ?>">

    <button type="submit">SAVE</button>
</form>
</div>
       <div class="total_price" id="totalPrice">
    <img id="total-img" src="<?php echo $img; ?>" alt="Dish Image">
    <div>
        <h3 id="total-name"><?php echo htmlspecialchars($name); ?></h3>
        <p id="total-amount">Price: ₹<?php echo $price; ?> /-</p>
        <p id="total-quantity">Quantity: <?php echo $quantity; ?></p>
    </div>
</div>

</div>
</body>
</html>