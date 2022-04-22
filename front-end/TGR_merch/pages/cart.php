<!DOCTYPE html>
<html lang="en">
<?php 
    include('databaseConnect.php');
    session_start();
    $tableDB = "products";
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/css/header_footer_style.css" />
    <link rel="stylesheet" href="../styles/css/loading_screen_style.css" />
    <link rel="stylesheet" href="../styles/css/aos.css" />
    <link rel="stylesheet" href="../styles/css/cart_style.css" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

    <title>Cart Page</title>
    <link rel="icon" type="image/x-icon" href="../styles/images/favicon.ico">
</head>

<body class="inactive">
    <!-- <section class="background">
        <h1 class="bg-title">#TGRWIN</h1>
    </section>
    <section class="bg-1"></section>
    <section class="bg-2"></section> -->

    <section class="main-container">
        <!-- HEADER -->
        <section class="main-header-container">
            <div class="header-container" data-aos="fade-in">
                <div class="header_logo">
                    <a href="#"><img src="../styles/images/LOGO_TELETIGERS 3.png" class="tgr_logo"><img
                            src="../styles/images/Teletigers Text.png" class="text_logo" /></a>
                </div>
                <ul class="header-opt">
                    <li><a href="home">home</a></li>
                    <li><a href="catalogue.php">products</a></li>
                    <li><a href="wip.html">services</a></li>
                    <li><a href="order_status.php">tracking</a></li>
                    <li><a href="help.html">FAQs</a></li>
                </ul>

                <div class="header-icons-container">
                    <form class="search-form" action="">
                        <input class="search-input" type="search" placeholder="Search here ...">
                        <i class="fa fa-search"></i>
                    </form>
                    <a href="cart.html">
                    <img src="../styles/images/shopping-bag.png" class="bag-icon" />
                    </a>
                </div>
            </div>
        </section>

        <!-- CART -->
        <section class="cart-container">
            <section class="sub-container" id="subcont">
                <div class="cont-restrict">

                    <ul class="breadcrumb">
                        <li><a href="home">Home</a></li>
                        <li style="color: white;">Cart</li>
                    </ul>

                    <div class="shopping-cart-label">
                        <h1 class="cart-header">Shopping Cart</h1>
                        <hr>
                    </div>
                    <br>
                    <div class="shopping-cart">

                        <div class="column-labels">
                            <label class="product-image">PRODUCT</label>
                            <label class="product-details">Product</label>
                            <label class="product-price">PRICE</label>
                            <label class="product-quantity">QUANTITY</label>
                            <label class="product-line-price">TOTAL</label>
                        </div>

                        <?php
                            if(isset($_SESSION["shopping_cart"]))
                            {
                                $total_price = 0;
                                foreach ($_SESSION['shopping_cart'] as $product)
                                {
                                    echo '<div class="product">
                                        <div class="product-image">
                                            <img
                                                src="../styles/images/' .  $product['image'] .'_1.jpg">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-title">'. $product['name'] . '</div>
                                            <p class="product-description">' . $product['size'] . '</p>
                                        </div>
                                        <div class="product-price">' . $product['price']  . '</div>
                                        <div class="product-quantity">
                                            <span class="stepper">
                                                <input type="hidden" name="id" value="' . $product['id']. ' " />
                                                <button type="button">–</button>
                                                <input type="number" name="counter" id="stepper2" value=' . $product['quantity'] . ' min="1" max="100" step="1">
                                                <button type="button">+</button>
                                            </span>
                                            <div class="product-removal">
                                                <input type="hidden" name="id" value="' . $product['id']. '" />
                                                <input type="hidden" name="remove" value="remove" />
                                                <button type="submit" class="remove">
                                                    Remove Item
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-line-price">' . $product['quantity']*$product['price']  . '</div>
                                    </div>' ;
                                    $total_price+= ($product['quantity']*$product['price']);
                                }
                            }
                            $status="";
                            if (isset($_POST['remove']))
                            {
                                if(!empty($_SESSION['shopping_cart'])) 
                                {
                                    foreach($_SESSION['shopping_cart'] as $key => $value) 
                                    {
                                        if($_POST['id'] == $key)
                                        {
                                        unset($_SESSION['shopping_cart'][$key]);
                                        $status = "<div class='box' style='color:red;'>
                                        Product is removed from your cart!</div>";
                                        }
                                    }	
                                }
                            }

                            if (isset($_POST['action'])){
                            foreach($_SESSION["shopping_cart"] as &$value){
                                if($value['id'] === $_POST['id']){
                                    $value['quantity'] = $_POST['quantity'];
                                    break; // Stop the loop after we've found the product
                                }
                            }
                                
                            }
                        ?>

                        <div class="bottom-container">
                            <div class="notes-container">
                                <form>
                                    <div class="title-text">
                                        Special Instructions
                                    </div> <br />
                                    <textarea rows = "6" cols = "75" name = "description" placeholder="Enter notes here..."></textarea>
                                 </form>
                            </div>

                            <div class="total-buttons-container">
                                <div class="totals">
                                    <div class="totals-item">
                                        <label>SUBTOTAL: </label>
                                        <div class="totals-value" id="cart-subtotal"><?php echo $total_price ?></div>
                                    </div>
                                    <p class="shipping-info">Shipping fee will be calculated at checkout.</p>
                                </div>
                                <div class="buttons">
                                    <a href="product_info.pdf" class="button btn-1">Continue Shopping</a>
                                    <form action="checkout">
                                    <input type="submit" class="button btn-2" value="Proceed to Checkout"></input>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                    </div>


                </div>
            </section>

        </section>

        <!-- FOOTER -->
        <section class="main-footer-container">
            <div class="footer-row">
                <div class="footer-left-col">
                    <div class="text-row">
                        <div class="info-tab">
                            <h1>Information</h1>
                            <a href="">
                                <h2>About Teletigers</h2>
                            </a>
                            <a href="">
                                <h2>Teletigers website</h2>
                            </a>
                            <a href="">
                                <h2>FAQs</h2>
                            </a>
                        </div>
                        <div class="info-tab">
                            <h1>Customer Services</h1>
                            <a href="help.html">
                                <h2>Return Policy</h2>
                            </a>
                            <a href="help.html">
                                <h2>Accessibility</h2>
                            </a>
                            <a href="help.html">
                                <h2>Terms and Conditions</h2>
                            </a>
                        </div>
                        <div class="info-tab">
                            <h1>Affiliates</h1>
                            <!-- Fatherless Behavior-->
                        </div>
                    </div>
                </div>
                <div class="footer-right-col">
                    <div class="footer-logo"><a href="#"><img src="../styles/images/LOGO_TELETIGERS 3.png"
                                class="tgr_logo">
                            <h1 class="text_logo">TELETIGERS</h1>
                        </a></div>
                    <div class="contact" id="contact">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/TeletigersEsports"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Teletigers_"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitch"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="text">all rights reserved 2022</div>
                </div>
            </div>

        </section>
    </section>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../styles/js/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        delay: 1650,
    });
    window.onload = function () {
        $(".bg-1, .bg-2, .bg-title").addClass("active");
    };

    window.onunload = function () {
        window.scrollTo(0, 0);
    };
    window.setTimeout(function () {
        $(".bg-1, .bg-2, .main-container").addClass("finished");
    }, 2250);
    window.setTimeout(function () {
        $("body").removeClass("inactive");
    }, 2800);

    //Cart Codes below
    /*Quantity Spinner Updater*/
    var inc = document.getElementsByClassName("stepper");
    for (i = 0; i < inc.length; i++) {
        var incI = inc[i].querySelector("input"),
            id = incI.getAttribute("id"),
            min = incI.getAttribute("min"),
            max = incI.getAttribute("max"),
            step = incI.getAttribute("step");
        document
            .getElementById(id)
            .previousElementSibling.setAttribute(
                "onclick",
                "stepperInput('" + id + "', -" + step + ", " + min + ")"
            );
        document
            .getElementById(id)
            .nextElementSibling.setAttribute(
                "onclick",
                "stepperInput('" + id + "', " + step + ", " + max + ")"
            );
    }
    function stepperInput(id, s, m) {
        var el = document.getElementById(id);
        if (s > 0) {
            if (parseInt(el.value) < m) {
                el.value = parseInt(el.value) + s;
            }
        } else {
            if (parseInt(el.value) > m) {
                el.value = parseInt(el.value) + s;
            }
        }
    }
</script>

</html>