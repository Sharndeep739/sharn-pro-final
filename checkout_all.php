<?php
session_start();
include 'actions/db.php';

$items = [];
$total_price = 0;

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query($conn,
"SELECT product_name, price, quantity, image FROM cart WHERE user_id='$user_id'"
);

$items = [];
$total_price = 0;

while($row = mysqli_fetch_assoc($query)){
    $items[] = $row;
    $total_price += $row['price'] * $row['quantity'];
}
// Fetch phone and fullname from users table
$user_query = mysqli_query($conn, "SELECT name, phone FROM users WHERE id = '$user_id'");
$user_data = mysqli_fetch_assoc($user_query);

$_SESSION['checkout_items'] = $items;
$_SESSION['total_price'] = $total_price;

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<link rel="stylesheet" href="css/checkout.css">
</head>
<body>

<div class="container">
<h2>Address</h2>

<form method="POST" action="actions/save_address.php" class="checkout-form">
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

    <button type="submit" onclick="saveAddress()" >save and continue ></button>
</form>
</div>
        <div class="order_summary total_price">

    <h2>Order Summary</h2>

        <?php foreach($items as $item){ ?>

        <p>
        <?php echo $item['product_name']; ?> 
        × <?php echo $item['quantity']; ?> 
        = ₹<?php echo $item['price'] * $item['quantity']; ?>
        </p>

        <?php } ?>

        <hr>

        <h3>Total Price: ₹<?php echo $total_price; ?></h3>

        </div>
        </div>

        </div>
        <script src="script/buy_now.js"></script>
        </body>
        <?php if(isset($_GET['move'])){ ?>
<script>
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector(".container").classList.add("move-left");
});
</script>
<?php } ?>
</html>