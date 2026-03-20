<?php
session_start();
include 'actions/db.php';

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM cart WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);

$grand_total = 0;
$cart_count = 0;

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    

    $query = mysqli_query($conn, 
        "SELECT COUNT(*) as total FROM cart WHERE user_id = '$user_id'"
    );

    $data = mysqli_fetch_assoc($query);

    if($data['total'] != NULL){
        $cart_count = $data['total'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href=".//css/cart.css">
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
                <input type="search" id="searchBar" placeholder="Search">
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
  <div class="cart-container">
    <h2>My Cart</h2>

    <?php if(mysqli_num_rows($result) > 0) { ?>

        <?php while($row = mysqli_fetch_assoc($result)) { 
            $total = $row['price'] * $row['quantity'];
            $grand_total += $total;
        ?>

        <div class="cart-item">
            <img src="image/<?php echo $row['image']; ?>.jpg">

            <div class="item-info">
                <h3><?php echo $row['product_name']; ?></h3>
                <p>Price: ₹<?php echo $row['price']; ?></p>
                <form method="POST" action="actions/update_quantity.php" class="qty-form">
                    Quantity: <input type="hidden" name="cart_id" value="<?php echo $row['id']; ?>">
    
                    <input type="number" 
                    name="quantity" 
                    value="<?php echo $row['quantity']; ?>" 
                     min="1" 
                    style="width:60px;">
    
    <button type="submit">Update</button>
</form>
                <p>Total: ₹<?php echo $total; ?></p>
            </div>

            <!-- remove item -->
            <form method="POST" action="actions/remove.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button class="remove-btn">Remove</button>
            </form>

                    <!-- buy now  -->
            <form method="POST" action="checkout.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="name" value="<?php echo $row['product_name']; ?>">
                <input type="hidden" name="price" value="<?php echo $row['price'] * $row['quantity']; ?>">
                <input type="hidden" name="img" value="image/<?php echo $row['image']; ?>.jpg">
                <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
                <button class="buy-btn">Buy Now</button>
            </form>
        </div>

        <?php } ?>

        <div class="total-box">
            Total Price: ₹<?php echo $grand_total; ?>
             <form method="POST" action="checkout_all.php">
                <button class="buy_all" type="submit">Buy All</button>
             </form>
        </div>

    <?php } else { ?>

        <div class="empty-cart">
            <h3>Your Cart is Empty </h3>
            <p>Add items from store to continue.</p>
            <a href="store.php" class="go-store-btn">Go To Store</a>
        </div>

    <?php } ?>
    
  </div>
</main>

    <script src="script/cart.js"></script>
</body>
</html>