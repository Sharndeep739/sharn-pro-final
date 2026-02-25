<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
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
            </div>
            <div class="cart">
                <a href="carts.php"><i class="fa-solid fa-cart-shopping"></i></a>
                
            </div>
        </header>

    <main>
        <div class="cart-overlay"></div>

<div class="cart">
    <div class="cart-header">
        <h2>Your Cart</h2>
        <span class="close-cart">&times;</span>
    </div>

    <div class="cart-body" id="cart-items">
        <!-- Cart items dynamically add honge -->
        
        <div class="cart-item">
            <img src="food.jpg" alt="">
            
            <div class="item-details">
                <h4>Korean Noodles</h4>
                <p>₹250</p>
                
                <div class="quantity">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>
            </div>

            <span class="remove-item">🗑</span>
        </div>

    </div>

    <div class="cart-footer">
        <div class="total">
            <h3>Total:</h3>
            <h3>₹250</h3>
        </div>
        <button class="checkout-btn">Proceed to Checkout</button>
    </div>
</div>
    </main>
    
</body>
</html>