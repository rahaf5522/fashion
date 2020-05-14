<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Fashionshop</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async>
        function redirect(){
          window.location="checkout.php";
        }
        </script>
    </head>
    <body>
      <action="formResualt.php" method="post">
        <header class="main-header">

            <h1 class="band-name band-name-large"><em>Fashion shop</em></h1>
        </header>
        <nav class="main-nav nav">
            <ul>


                <li><a href="register.html">Register</a></li>
                <li><a href="login.html">Login</a></li>
                  <li>  <a href = "logout.php">Sign Out</a></li>


            </ul>
        </nav>

        <section class="container content-section" >

            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Dress 1</span>
                    <img class="shop-item-image" src="ddress.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$699</span>
                        <button class="btn btn-primary shop-item-button" type="button" >ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dress 2</span>
                    <img class="shop-item-image" src="Adress.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$450</span>
                        <button class="btn btn-primary shop-item-button"type="button" id="dress2">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dress 3</span>
                    <img class="shop-item-image" src="bdress.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$800</span>
                        <button class="btn btn-primary shop-item-button" type="button" id="dress3">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Blouse 1</span>
                    <img class="shop-item-image" src="b1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$200</span>
                        <button class="btn btn-primary shop-item-button" type="button" id="Blouse1">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Blouse 2</span>
                    <img class="shop-item-image" src="b2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$350</span>
                        <button class="btn btn-primary shop-item-button" type="button" id="Blouse2">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Blouse 3</span>
                    <img class="shop-item-image" src="b3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$270</span>
                        <button class="btn btn-primary shop-item-button" type="button" id="Blouse3">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row" action="formpayment" method="post">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button" onclick="redirect()">PURCHASE</button>
        </section>
        <footer>
        <div class="footer">
        <p><a href="contact.php">contact us</a> </p>
        <p><a href="faq.html">FAQ</a> </p>

      </div></footer>
    </body>
</html>
