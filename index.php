
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuisineCraft</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
    <header>
        <div class="name_cuntry">
            <div id="indian"><i class="fa-solid fa-burger"></i> Indian</div>
            <div id="Japanese"><i class="fa-solid fa-bowl-food"></i>  Japanese</div>
            <div id="Korean"><i class="fa-solid fa-bowl-rice"></i> Korean</div>
        </div>
        

    </header>
    <main>  
        <!-- left side conternt  -->
        <div class="content">
            <div id="top_line">
                <i>The real taste of</i>
            </div>
            <div id="CuisineCraft">
                CuisineCraft
            </div>
            <div id="food">
                food
            </div>
            <div id="discribe_line">
                Experience authentic Korean, Japanese, and Indian cuisines on one platform
            </div>
            <button class="btn" name="reg_login" onclick="moveDiv()">
                Register/Login   
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>


        <!-- hide login div -->
         <div class="login_register" id="register_loginBox">
            <div id="buttons_div">
                <button  id="register_b" onclick="registerr()">Register</button>
                <button id="login_b" onclick="loginn()">Login</button>
            </div>
            
            <form id="register"  >
                <input type="text" name="name" placeholder="Enter name" required>
                <input type="password" name="password" placeholder="Set password" required>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="number" name="phone" id="phone" placeholder="Phone Number" required>
                <button type="button" id="sendOtp">Send OTP</button>

                
                <div id="otpBox" style="display:none;">
                    
                    <input type="text" id="otp" placeholder="Enter OTP">
                    
                    <button type="button" id="verifyOtp">Verify OTP</button>
                    
                </div>

                    <button type="submit" id="submitBtn" style="display:none;">Submit</button>
                
            </form>
            <form id="login" >
                <input type="text" name="name" placeholder="User name">
                <input type="password" name="password" placeholder="password">
                <button type="submit" >Submit</button>
            </form>
         </div>
        

        <!-- right side image -->
         <div class="img" id="imgBox">
            <div id="inner"></div>
         </div>
    </main>
    <footer>
        <div id="box1">
            <div id="red_box">Food Delivery</div>
            <pre id="off"> 60% OFF</pre>
        </div>
        <div id="box2">
            <div id="yellow_box">Fast Delivery</div>
            
            <pre id="off"> 60% OFF</pre>
        </div>
        </div>
        <div id="box3">
            <div id="green_box">Fresh Delivery</div>
            
            <pre id="off"> 60% OFF</pre>
        </div>
        </div>
    </footer>

    <!-- <h2>Register</h2>
    <form action="actions/process.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form> -->
    <script src="script/script.js" ></script>
</body>
</html>
