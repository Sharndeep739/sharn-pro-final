<?php
session_start();
$items = [];

if(isset($_SESSION['checkout_items'])){
    $items = $_SESSION['checkout_items'];   // BUY ALL ITEMS
    }else{
        // SINGLE ITEM
        $items[] = [
            "product_name" => $_SESSION['item_name'],
            "price" => $_SESSION['price'],
            "quantity" => $_SESSION['quantity'],
            "image" => $_SESSION['img']
            ];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Page</title>
<link rel="stylesheet" href="css/payment_meth.css">
</head>
<body>

<div class="payment-container">

<div class="left-side">
<img src="image/payment_meth.png" alt="Dish Image">
</div>

<div class="right-side">

<h2>Choose Payment Method</h2>
<?php
if(empty($items)){
    echo "No items found!";
    exit();
}
?>
<form method="POST" action="actions/place_order.php">

<!-- ITEM DATA SEND -->
<?php foreach($items as $item){ ?>

<input type="hidden" name="item_name[]" value="<?= htmlspecialchars($item['product_name']) ?>">
<input type="hidden" name="price[]" value="<?= htmlspecialchars($item['price']) ?>">
<input type="hidden" name="quantity[]" value="<?= htmlspecialchars($item['quantity']) ?>">
<input type="hidden" name="img[]" value="<?= htmlspecialchars($item['image']) ?>">

<?php } ?>

<div class="payment-option">
<input type="radio" name="payment_method" value="Cash on Delivery" checked>
<label>Cash on Delivery</label>
</div>

<label id="not_ava">(Not Available)</label>

<div class="payment-option disabled">
<input type="radio" name="payment_method" value="UPI" disabled>
<label>UPI (Google Pay / PhonePe )</label>
</div>

<div class="payment-option disabled">
<input type="radio" name="payment_method" value="Card" disabled>
<label>Credit / Debit Card</label>
</div>

<div class="payment-option disabled">
<input type="radio" name="payment_method" value="Paytm" disabled>
<label>Paytm</label>
</div>

<button type="submit" class="place-order">Place Order</button>

</form>

</div>

</div>

</body>
</html>