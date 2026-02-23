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
             <a href="main.php"><div id="home">Home</div></a>
            <a href="store.php"><div id="Store">Store</div></a>
            <a href="myorder.php"><div id="myoder">My Order</div></a>
        </div>
        <div class="cart">
            <a href="carts.php"><i class="fa-solid fa-cart-shopping"></i></a>
            
        </div>
    </header>

    <main>
        <div class="total_item">

        </div>
        <div class="total_price"></div>
    </main>
    
</body>
</html>