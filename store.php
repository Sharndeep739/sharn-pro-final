<?php
include "actions/db.php"; // db connection
include "actions/cart_count.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="css/store.css">
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
        <div class="filter">
            <label id="lable_price">Min Price: </label>
            <input type="number" id="minPrice" placeholder="0">

            <label id="lable_price">Max Price: </label>
            <input type="number" id="maxPrice" placeholder="500">

            <button id="filterBtn">Apply Filter</button>

        </div>


        <div class="food_grid">
            <div class="food_cart" data-price="120" id="Burger" data-image="indian/crack\ burgers">
                <!-- img -->

                <div class="img_box img1 "></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹120/-
                    </div>
                    <div id="item_name">
                        Burger
                    </div>
                    <div id="item">⭐ 4.3 · 15 mins</div>
                    <div id="detail">
                        Fast Food, Indian, Street Style
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>
            </div>
        
            <div class="food_cart" data-price="150" id="Miso Soup" data-image="japneses/Amazing\ Miso\ Soup_\ A\ Delicious\ Comforting\ Classic">

                <div class="img_box img2"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                           ₹150/-
                    </div>
                    <div id="item_name">
                        Miso Soup
                    </div>
                    <div id="item">⭐ 4.5 · 10–15 mins</div>
                    <div id="detail">
                       Japanese, Traditional, Soup
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="280" id="Bulgogi" data-image="korean/Bulgogi\ \(Spicy\ Bulgogi\)">
                <div class="img_box img3"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹280/-
                    </div>
                    <div id="item_name">
                        Bulgogi
                    </div>
                    <div id="item">⭐ 4.7 · 35–45 mins</div>
                    <div id="detail">
                        Korean, BBQ, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="140" id="Samosa" data-image="indian/Crispy\ Aloo\ Samosa">
                <div class="img_box img4"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹40/-
                    </div>
                    <div id="item_name">
                        Samosa
                    </div>
                    <div id="item">⭐ 4.4 · 10 mins</div>
                    <div id="detail">
                        Indian, Street Food
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="90" id="Egg Sandwich" data-image="japneses/Egg\ Salad\ Sandwich">
                <div class="img_box img5"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹90/-
                    </div>
                    <div id="item_name">
                        Egg Sandwich
                    </div>
                    <div id="item">⭐ 4.2 · 10–12 mins</div>
                    <div id="detail">
                        Fast Food, Indian, Street Style
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="260" id="Japchae" data-image="korean/Japchae">
                <div class="img_box img6"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹260/-
                    </div>
                    <div id="item_name">
                        Japchae
                    </div>
                    <div id="item">⭐ 4.6 · 25–30 mins</div>
                    <div id="detail">
                        Korean, Traditional, Noodles
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="80" id="Dosa" data-image="indian/dosa\ on">
                <div class="img_box img7"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹80/-
                    </div>
                    <div id="item_name">
                        Dosa
                    </div>
                    <div id="item">⭐ 4.5 · 15–20 mins</div>
                    <div id="detail">
                        South Indian, Traditional
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="220" id="Kimbap" data-image="korean/Kimbap">
                <div class="img_box img8"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹220/-
                    </div>
                    <div id="item_name">
                        Kimbap
                    </div>
                    <div id="item">⭐ 4.6 · 20–25 mins</div>
                    <div id="detail">
                        Korean, Rice Roll, Snack, Veg
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="250" id="Japnese Curry" data-image="japneses/Japanese\ Curry\ on\ Rice">
                <div class="img_box img9"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹250/-
                    </div>
                    <div id="item_name">
                        Japnese Curry
                    </div>
                    <div id="item">⭐ 4.6 · 30–40 mins</div>
                    <div id="detail">
                        Japanese, Curry, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="90" id="Gulab Jaman" data-image="indian/Gulab\ Jamun!\ Indian\ Dessert\ Recipes\ _\ Sweets\ _\ Desserts">
                <div class="img_box img10"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹90/-
                    </div>
                    <div id="item_name">
                        Gulab Jaman
                    </div>
                    <div id="item">⭐ 4.7 · 10–15 mins</div>
                    <div id="detail">
                        Indian, Dessert, Sweet, Veg
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="120" id="Kimchi" data-image="korean/kimchi">
                <div class="img_box img11"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹120/-
                    </div>
                    <div id="item_name">
                        Kimchi
                    </div>
                    <div id="item">⭐ 4.5 · 5–10 mins</div>
                    <div id="detail">
                        Korean, Fermented, Side Dish
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="180" id="Melonpan" data-image="japneses/melonpan">
                <div class="img_box img12"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹180/-
                    </div>
                    <div id="item_name">
                       Melonpan
                    </div>
                    <div id="item">⭐ 4.4 · 15–20 mins</div>
                    <div id="detail">
                        Japanese, Bakery, Sweet Bread
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="200" id="Paneer Butter" data-image="indian/Paneer\ Butter\ Masala\ Recipe\ Ever!">
                <div class="img_box img13"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹200/- with 60% off
                    </div>
                    <div id="item_name">
                        Paneer Butter 
                    </div>
                    <div id="item">⭐ 4.6 · 30–40 mins</div>
                    <div id="detail">
                        North Indian, Punjabi
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="240" id="Mandu" data-image="korean/Mandu\ with\ Sweet\ Soy\ Drizzle">
                <div class="img_box img14"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹240/-
                    </div>
                    <div id="item_name">
                        Mandu
                    </div>
                    <div id="item">⭐ 4.6 · 25–30 mins</div>
                    <div id="detail">
                        Korean, Dumplings, Snack
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="160" id="MOCHI" data-image="japneses/MOCHI\ 3D">
                <div class="img_box img15"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹160/-
                    </div>
                    <div id="item_name">
                        MOCHI
                    </div>
                    <div id="item">⭐ 4.5 · 10–15 mins</div>
                    <div id="detail">
                        Japanese, Dessert, Sweet, Veg
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="150" id="Pav Bhaji " data-image="indian/Pav\ Bhaji\ Food">
                <div class="img_box img16"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹150/-
                    </div>
                    <div id="item_name">
                        Pav Bhaji 
                    </div>
                    <div id="item">⭐ 4.7 · 20–25 mins</div>
                    <div id="detail">
                        Indian, Street Food, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="300" id="Ramen" data-image="korean/Ramen\ Noodles\ \(Vegan\ Recipe\)">
                <div class="img_box img17"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹300/-
                    </div>
                    <div id="item_name">
                        Ramen
                    </div>
                    <div id="item">⭐ 4.7 · 35–45 mins</div>
                    <div id="detail">
                        Japanese, Noodles, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="260" id="Okonomiyaki" data-image="japneses/Okonomiyaki\ ">
                <div class="img_box img18"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹260/-
                    </div>
                    <div id="item_name">
                        Okonomiyaki
                    </div>
                    <div id="item">⭐ 4.6 · 25–30 mins</div>
                    <div id="detail">
                        Japanese, Savory Pancake
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="350" id="Pizza" data-image="indian/pizza">
                <div class="img_box img19"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹350/- 
                    </div>
                    <div id="item_name">
                        Pizza
                    </div>
                    <div id="item">⭐ 4.5 · 20–25 mins  </div>
                    <div id="detail">
                        Italian, Cheesy, Fast Food
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="320" id="Soondubu Jjigae" data-image="korean/Soondubu\ Jjigae">
                <div class="img_box img20"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹320/-  
                    </div>
                    <div id="item_name">
                        Soondubu Jjigae
                    </div>
                    <div id="item">⭐ 4.7 · 25–30 mins  </div>
                    <div id="detail">
                        Korean, Spicy Tofu Stew
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="180" id="Onigiri" data-image="japneses/Onigiri">
                <div class="img_box img21"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹180/-  
                    </div>
                    <div id="item_name">
                       Onigiri
                    </div>
                    <div id="item">⭐ 4.4 · 15–20 mins </div>
                    <div id="detail">
                        Japanese, Rice Ball, Snack
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="90" id="Salted Lassi" data-image="indian/Salted\ Lassi\ -\ Indian\ Style\ Yogurt\ based\ Summer\ Beverage\ Recipe\ -\ Step\ by\ Step">
                <div class="img_box img22"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹90/-  
                    </div>
                    <div id="item_name">
                        Salted Lassi
                    </div>
                    <div id="item">⭐ 4.3 · 5–10 mins  </div>
                    <div id="detail">
                        Indian, Beverage, drink
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="250" id="Tteokbokki" data-image="korean/Tteokbokki\ with\ Boiled\ Eggs">
                <div class="img_box img23"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹250/-  
                    </div>
                    <div id="item_name">
                        Tteokbokki
                    </div>
                    <div id="item">⭐ 4.5 · 20–25 mins  </div>
                    <div id="detail">
                        Korean, Spicy Rice Cake
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="400" id="Sushi" data-image="japneses/Sushi\ dinner">
                <div class="img_box img24"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹400/-
                    </div>
                    <div id="item_name">
                       Sushi
                    </div>
                    <div id="item">⭐ 4.8 · 25–30 mins</div>
                    <div id="detail">
                        Japanese, Rice & Fish
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="120" id="Sambar" data-image="indian/Sambar\ Powder\ Recipe">
                <div class="img_box img25"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹120/-  
                    </div>
                    <div id="item_name">
                        Sambar
                    </div>
                    <div id="item">⭐ 4.4 · 15–20 mins  </div>
                    <div id="detail">
                        Indian, Lentil Soup, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="220" id="Tteokguk" data-image="korean/Tteokguk\ \(Korean\ Rice\ Cake\ Soup\)\ -\ Beyond\ Kimchee">
                <div class="img_box img26"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹220/-  
                    </div>
                    <div id="item_name">
                        Tteokguk
                    </div>
                    <div id="item">⭐ 4.6 · 20–25 mins  </div>
                    <div id="detail">
                        Korean, Rice Cake Soup
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="280" id="Takoyaki" data-image="japneses/Takoyaki">
                <div class="img_box img27"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹280/-  
                    </div>
                    <div id="item_name">
                        Takoyaki
                    </div>
                    <div id="item">⭐ 4.7 · 20–25 mins </div>
                    <div id="detail">
                        Japanese, Octopus Ball
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="300" id="Subway Sandwiches" data-image="indian/Subway\ Sandwiches\,\ According\ to\ Dietitians">
                <div class="img_box img28"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                           ₹300/-  
                    </div>
                    <div id="item_name">
                        Subway Sandwiches
                    </div>
                    <div id="item">⭐ 4.5 · 15–20 mins  </div>
                    <div id="detail">
                        Fast Food, Sandwich
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="350" id="𝗕𝗶𝗯𝗶𝗺𝗯𝗮𝗽" data-image="korean/𝗕𝗶𝗯𝗶𝗺𝗯𝗮𝗽\ \(𝗞𝗼𝗿𝗲𝗮𝗻\ 𝗠𝗶𝘅𝗲𝗱\ 𝗥𝗶𝗰𝗲\ 𝗕𝗼𝘄𝗹\)">
                <div class="img_box img29"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹350/- 
                    </div>
                    <div id="item_name">
                        𝗕𝗶𝗯𝗶𝗺𝗯𝗮𝗽
                    </div>
                    <div id="item">⭐ 4.7 · 25–30 mins  </div>
                    <div id="detail">
                        Korean, Mixed Rice, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="370" id="Tonkatsu" data-image="japneses/tonkatsu">
                <div class="img_box img30"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹370/-
                    </div>
                    <div id="item_name">
                        Tonkatsu
                    </div>
                    <div id="item">⭐ 4.6 · 25–30 mins  </div>
                    <div id="detail">
                        Japanese, Breaded Pork Cutlet
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="100" id="Idli" data-image="indian/Yummy\ Rawa\ Idli\ from\ Diksha\'s\ Cafe">
                <div class="img_box img31"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            ₹100/-  
                    </div>
                    <div id="item_name">
                        Idli
                    </div>
                    <div id="item">⭐ 4.5 · 10–15 mins  </div>
                    <div id="detail">
                        Indian, Steamed Rice Cake
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="" id="food_cart" data-image="">
                <div class="img_box img32"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img33"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img34"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img35"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img36"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img37"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img38"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" id="food_cart">
                <div class="img_box img39"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>


            <div class="food_cart" id="food_cart">
                <div class="img_box img40"></div>
                <!-- detail -->

                <div id="item_detial">
                    <div id="price">
                            456456
                    </div>
                    <div id="item_name">
                        65475
                    </div>
                    <div id="item">5345793</div>
                    <div id="detail">
                        insaihngjh
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <!-- add more cart here -->
        </div>
    </main>
    <footer>

    </footer>
    <script src="script/store.js"></script>
</body>
</html>