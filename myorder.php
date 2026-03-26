<?php
include "actions/db.php"; // db connection
include "actions/cart_count.php";
include "actions/my_order.php";
?>
<?php if(isset($_GET['order']) && $_GET['order'] == 'success'): ?>
    <script>
        alert("🎉 Order Confirmed Successfully!");
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Order</title>
    <link rel="stylesheet" href=".//css/myorder.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
    <header>
        <div class="username">
                <img id="mainAvatar" src="image/avatar/<?php echo $_SESSION['avatar'] ?? 'avatar1.png'; ?>" class="avatar" onclick="openPanel()">
            <pre> Hi,</pre>
            <div id="nameU">
                    <?php echo htmlspecialchars($_SESSION['username']); ?>

            </div>
        </div>

        <!-- profile panle  -->
            <div id="profilePanel" class="profile-panel">
                <p><?php echo $_SESSION['username']; ?></p>

            <img id="userAvatar" src="image/avatar/<?php echo $_SESSION['avatar'] ?? 'avatar1.png'; ?>" class="avatar-big">

            <button onclick="toggleAvatarEdit()">Edit Avatar</button>

            <div id="avatarSelect" class="avatar-select">

                <img src="image/avatar/avatar1.png" onclick="setAvatar('avatar1.png')">
                <img src="image/avatar/avatar2.png" onclick="setAvatar('avatar2.png')">
                <img src="image/avatar/avatar3.png" onclick="setAvatar('avatar3.png')">
                <img src="image/avatar/avatar4.png" onclick="setAvatar('avatar4.png')">
                <img src="image/avatar/avatar5.png" onclick="setAvatar('avatar5.png')">
                <img src="image/avatar/avatar6.png" onclick="setAvatar('avatar6.png')">
                <img src="image/avatar/avatar7.png" onclick="setAvatar('avatar7.png')">
                <img src="image/avatar/avatar8.png" onclick="setAvatar('avatar8.png')">
                <img src="image/avatar/avatar9.png" onclick="setAvatar('avatar9.png')">

                 </div>

                <a href="store.php">Store</a>
                <a href="carts.php">MY Cart</a>
                <a href="myorder.php">MY Order</a>
                <a href="actions/logout.php">Logout</a>
                </div>

        <div class="nav">
             <a href="main.php"><div id="home">Home</div></a>
            <a href="store.php"><div id="Store">Store</div></a>
            <a href="myorder.php"><div id="myoder">My Order</div></a>
            <div class="cart">
            <a href="carts.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <?php if($cart_count > 0): ?>
                <span class="cart-count"><?php echo $cart_count; ?></span>
                <?php endif; ?>
            
            </div>
        </div>
        
    </header>
    <main>

<div id="my-orders">

<?php if(count($orders) > 0): ?>

<?php foreach($orders as $order): ?>

<?php
$status = $order['status'];

$step = 1;
if($status == "Order Placed") $step = 1;
if($status == "Packed") $step = 2;
if($status == "Shipped") $step = 3;
if($status == "Out for Delivery") $step = 4;
if($status == "Delivered") $step = 5;

$imagePath = strpos($order['image'], 'image/') === 0 ? $order['image'] : 'image/' . $order['image'];
?>

<div class="order-card">

<img src="<?= htmlspecialchars($imagePath) ?>">

<div class="order-details">

<h3><?= htmlspecialchars($order['item_name']) ?></h3>

<p>Quantity: <?= $order['quantity'] ?></p>

<p>Price: ₹<?= $order['price'] ?></p>

<p>Order Date: <?= $order['order_date'] ?></p>


</div>

    <div class="track-container" data-step="<?= $step ?>">

        <div class="progress-line"></div>

        <div class="step">
            <div class="dot"></div>
            <p>Order Placed</p>
        </div>

        <div class="step">
            <div class="dot"></div>
            <p>Packed</p>
        </div>

        <div class="step">
            <div class="dot"></div>
            <p>Shipped</p>
        </div>

        <div class="step">
            <div class="dot"></div>
            <p>Out for Delivery</p>
        </div>

        <div class="step">
            <div class="dot"></div>
            <p>Delivered</p>
        </div>

    </div>
    <div class="payment-box">
        <div class="payment-text">
            <?= htmlspecialchars($order['payment_method']) ?>
        </div>

        <div class="payment-price">
            ₹<?= $order['price'] ?>/-
        </div>
        
    </div>
    <div class="state-box 
        <?php 
        if($order['order_state'] == 'Cancelled') echo 'cancel';
        elseif($order['order_state'] == 'Delivered') echo 'delivered';
        else echo 'way';
        ?>">
        <?= htmlspecialchars($order['order_state']) ?>
    </div>

    <form action="actions/send_report.php" method="POST">
        <input type="hidden" name="order_id" value="<?= isset($order['id']) ? htmlspecialchars($order['id']) : '' ?>">
        <div class="report-box">
            <input type="text" name="report" placeholder="Enter your report..." required>
            <button type="submit">Send</button>
        </div>
    </form>


</div>

<?php endforeach; ?>

<?php else: ?>
<div class="order_not_found"><p>No orders found!</p></div>


<?php endif; ?>

</div>

</main>
    <script src="script/myorder.js"> </script>
    <script>
        let stepNumber = <?php echo $step; ?>;

        setStep(stepNumber);
    </script>
</body>
</html>