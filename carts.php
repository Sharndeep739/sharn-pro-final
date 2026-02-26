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
                <i class="fa-solid fa-pizza-slice"></i>
                <pre> Hi,</pre>
                <div id="nameU">
                    <?php echo htmlspecialchars($_SESSION['username']); ?>
                </div>
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
                <p>Quantity: <?php echo $row['quantity']; ?></p>
                <p>Total: ₹<?php echo $total; ?></p>
            </div>

            <form method="POST" action="/testphp/actions/remove.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button class="remove-btn">Remove</button>
            </form>

            <form method="POST" action="/testphp/buy_now.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button class="buy-btn">Buy Now</button>
            </form>
        </div>

        <?php } ?>

        <div class="total-box">
            Total Price: ₹<?php echo $grand_total; ?>
            <button class="buy_all" type="buy_All">Buy All</button>
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