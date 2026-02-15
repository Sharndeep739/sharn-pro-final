
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
    <title>Store</title>
    <link rel="stylesheet" href="css/store.css">
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
                <input type="search" id="searchBar" placeholder="search">
                <a href="main.php"><div id="home">Home</div></a>
                <a href="store.php"><div id="Store">Store</div></a>
                <a href="myorder.php"><div id="myoder">My Order</div></a>
            </div>
        <div class="cart">
            <a href="carts.php"><i class="fa-solid fa-cart-shopping"></i></a>

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
            <a href="index.php">
            <div class="food_cart" data-price="120" id="Burger">
                <!-- img -->

                <div id="img_box" class="img1"></div>
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
            </a>
            <div class="food_cart" data-price="150" id="Miso Soup">

                <div id="img_box" class="img2"></div>
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
            <div class="food_cart" data-price="280" id="Bulgogi">
                <div id="img_box" class="img3"></div>
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
            <div class="food_cart" data-price="140" id="Samosa">
                <div id="img_box" class="img4"></div>
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
            <div class="food_cart" data-price="90" id="Egg Sandwich">
                <div id="img_box" class="img5"></div>
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
            <div class="food_cart" data-price="260" id="Japchae">
                <div id="img_box" class="img6"></div>
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
            <div class="food_cart" data-price="80" id="Dosa">
                <div id="img_box" class="img7"></div>
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
            <div class="food_cart" data-price="220" id="Kimbap">
                <div id="img_box" class="img8"></div>
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
            <div class="food_cart" data-price="250" id="Japnese Curry">
                <div id="img_box" class="img9"></div>
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
            <div class="food_cart" data-price="90" id="Gulab Jaman">
                <div id="img_box" class="img10"></div>
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
            <div class="food_cart" data-price="120" id="Kimchi">
                <div id="img_box" class="img11"></div>
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
            <div class="food_cart" data-price="180" id="Melonpan">
                <div id="img_box" class="img12"></div>
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
            <div class="food_cart" data-price="200" id="Paneer Butter">
                <div id="img_box" class="img13"></div>
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
            <div class="food_cart" data-price="240" id="Mandu">
                <div id="img_box" class="img14"></div>
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
            <div class="food_cart" data-price="160" id="MOCHI">
                <div id="img_box" class="img15"></div>
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
            <div class="food_cart" data-price="150" id="Pav Bhaji ">
                <div id="img_box" class="img16"></div>
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
            <div class="food_cart" data-price="300" id="Ramen">
                <div id="img_box" class="img17"></div>
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
            <div class="food_cart" data-price="260" id="Okonomiyaki">
                <div id="img_box" class="img18"></div>
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
            <div class="food_cart" data-price="350" id="Pizza">
                <div id="img_box" class="img19"></div>
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
            <div class="food_cart" data-price="320" id="Soondubu Jjigae">
                <div id="img_box" class="img20"></div>
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
            <div class="food_cart" data-price="180" id="Onigiri">
                <div id="img_box" class="img21"></div>
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
            <div class="food_cart" data-price="90" id="Salted Lassi">
                <div id="img_box" class="img22"></div>
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
            <div class="food_cart" data-price="250" id="Tteokbokki">
                <div id="img_box" class="img23"></div>
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
            <div class="food_cart" data-price="400" id="Sushi">
                <div id="img_box" class="img24"></div>
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
            <div class="food_cart" data-price="120" id="Sambar">
                <div id="img_box" class="img25"></div>
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
            <div class="food_cart" data-price="220" id="Tteokguk">
                <div id="img_box" class="img26"></div>
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
                        Korean, Rice Cake Soup, Main Course
                    </div>
                    <button class="to_cart">Add To Cart</button>
                </div>

            </div>
            <div class="food_cart" data-price="280" id="Takoyaki">
                <div id="img_box" class="img27"></div>
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
            <div class="food_cart" data-price="300" id="Subway Sandwiches">
                <div id="img_box" class="img28"></div>
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
            <div class="food_cart" data-price="350" id="𝗕𝗶𝗯𝗶𝗺𝗯𝗮𝗽">
                <div id="img_box" class="img29"></div>
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
            <div class="food_cart" data-price="370" id="Tonkatsu">
                <div id="img_box" class="img30"></div>
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
            <div class="food_cart" data-price="100" id="Idli">
                <div id="img_box" class="img31"></div>
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
            <div class="food_cart" data-price="" id="food_cart">
                <div id="img_box" class="img32"></div>
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
                <div id="img_box" class="img33"></div>
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
                <div id="img_box" class="img34"></div>
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
                <div id="img_box" class="img35"></div>
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
                <div id="img_box" class="img36"></div>
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
                <div id="img_box" class="img37"></div>
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
                <div id="img_box" class="img38"></div>
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
                <div id="img_box" class="img39"></div>
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
                <div id="img_box" class="img41"></div>
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