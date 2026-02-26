<?php
session_start();
include 'actions/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
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

// Optional: get cart_id if needed
$cart_id = $_GET['cart_id'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<style>
body { font-family: Arial, sans-serif; background: #f5f5f5; margin:0; padding:0; }
.container { width: 50%; margin: 40px auto; background: #fff; padding: 25px 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
h2 { text-align: center; margin-bottom: 25px; color: #333; }
.checkout-form input { width: 100%; padding: 12px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc; font-size: 16px; }
.checkout-form button { width: 100%; padding: 15px; margin-top: 15px; background-color: green; color: #fff; border: none; font-size: 18px; cursor: pointer; border-radius: 5px; }
.checkout-form button:hover { background-color: darkgreen; }
label { font-weight: bold; margin-top: 10px; display: block; }
</style>
</head>
<body>

<div class="container">
<h2>Checkout</h2>

<form method="POST" action="actions/place_order.php" class="checkout-form">
    <input type="hidden" name="cart_id" value="<?php echo htmlspecialchars($cart_id); ?>">

    <label>Full Name</label>
    <input type="text" name="name" placeholder="Full Name" required
           value="<?php echo htmlspecialchars($prefill['name']); ?>">

    <label>Phone Number</label>
    <input type="text" name="phone" placeholder="Phone Number" required
           value="<?php echo htmlspecialchars($prefill['phone']); ?>">

    <label>State</label>
    <input type="text" name="state" placeholder="State" required
           value="<?php echo htmlspecialchars($prefill['state']); ?>">

    <label>City</label>
    <input type="text" name="city" placeholder="City" required
           value="<?php echo htmlspecialchars($prefill['city']); ?>">

    <label>Pin Code</label>
    <input type="number" name="pincode" placeholder="Pin Code" required
           value="<?php echo htmlspecialchars($prefill['pincode']); ?>">

    <label>Area</label>
    <input type="text" name="area" placeholder="Area" required
           value="<?php echo htmlspecialchars($prefill['area']); ?>">

    <label>Landmark / Famous Shop</label>
    <input type="text" name="landmark" placeholder="Famous shop" required
           value="<?php echo htmlspecialchars($prefill['landmark']); ?>">

    <button type="submit">Place Order</button>
</form>
</div>

</body>
</html>