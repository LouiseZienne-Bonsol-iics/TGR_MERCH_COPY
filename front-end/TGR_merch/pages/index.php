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
    <link rel="stylesheet" href="../styles/css/home_style.css" />
    <link rel="stylesheet" href="../styles/css/aos.css" />
    <link rel="stylesheet" href="../styles/css/carousel_style.css" />
    <link rel="stylesheet" href="../styles/css/products_style.css" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

    <title>Teletigers #tgrwin</title>
    <link rel="icon" type="image/x-icon" href="../styles/images/favicon.ico">
</head>

<body class="inactive">
    <section class="background">
        <h1 class="bg-title">#TGRWIN</h1>
    </section>
    <section class="bg-1"></section>
    <section class="bg-2"></section>

    <section class="main-container">
        <!-- HEADER -->
        <section class="main-header-container">
            <div class="header-container" data-aos="fade-in">
                <div class="header_logo">
                    <a href="#"><img src="../styles/images/LOGO_TELETIGERS 3.png" class="tgr_logo"><img
                            src="../styles/images/Teletigers Text.png" class="text_logo" /></a>
                </div>
                <ul class="header-opt">
                    <li><a href="home.php">home</a></li>
                    <li><a href="catalogue.php">products</a></li>
                    <li><a href="wip.html">services</a></li>
                    <li><a href="order_status.php">tracking</a></li>
                    <li><a href="help.html">FAQs</a></li>
                </ul>

                <div class="header-icons-container">
                    <form class="search-form" action="catalogue">
                        <input class="search-input" type="search" placeholder="Search here ...">
                        <i class="fa fa-search"></i>
                    </form>
                    <a href="cart.html">
                        <img src="../styles/images/shopping-bag.png" class="bag-icon" href="cart.html"/>
                    </a>
                </div>

            </div>
        </section>

        <!--CAROUSEL-->
        <section class="carousel-container" data-aos="fade-in">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">

                <div class="slide first">
                    <a href="product_info.html">
                    <img src="../styles/images/main_banner 1.png">
                    </a>
                </div>
                <div class="slide">
                    <a href="product_info.html"></a>
                    <img src="../styles/images/main_banner 2.png"> </a>
                </div>
                <div class="slide">
                    <a href="product_info.html">
                    <img src="../styles/images/main_banner 3.jpg"> </a>
                    </div>

                <div class="carousel-nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>

            </div>
            <div class="carousel-nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </section>



        <!-- container 2 -->
        <section class="container-2" id="cont2">
            <div class="cont-restrict">
                <div class="categories-row">
                    <div class="cat-tab"><img src="../styles/images/mini_banner_1.png" alt="">
                        <a href="" class="cat-text">
                            <h1>[[CATEGORY]]</h1>
                            <h3>SHOP NOW</h3>
                        </a>
                    </div>
                    <div class="cat-tab"><img src="../styles/images/mini_banner_2.png" alt="">
                        <a href="" class="cat-text">
                            <h1>[[CATEGORY]]</h1>
                            <h3>SHOP NOW</h3>
                        </a>
                    </div>
                    <div class="cat-tab"><img src="../styles/images/mini_banner_3.png" alt="">
                        <a href="" class="cat-text">
                            <h1>[[CATEGORY]]</h1>
                            <h3>SHOP NOW</h3>
                        </a>
                    </div>
                </div>
                <div class="featured">
                    <h1 class="feat-header">Featured Products</h1>
                    <hr>
                    <div class="products">
                        <!-- product-tile should be automatically generated per unique item -->
                        <div class="product-tile">
                            <a href="product_info" class="product-img-container"><img src="../styles/images/shirt_1.JPG"
                                    alt=""></a>
                            <div class="product-title">
                                <h1>Teletigers 2021 Jersey</h1>
                            </div>
                            <div class="product-price">
                                <h3>PHP 00.00</h3>
                            </div>
                        </div>
                        <div class="product-tile">
                            <a href="product_info.html" class="product-img-container"><img src="../styles/images/mask_1.png"
                                    alt=""></a>
                            <div class="product-title">
                                <h1>Teletigers 2021 Face Mask</h1>
                            </div>
                            <div class="product-price">
                                <h3>PHP 00.00</h3>
                            </div>
                        </div>
                        <div class="product-tile">
                            <a href="product_info.html" class="product-img-container"><img src="../styles/images/product_placeholder.png"
                                    alt=""></a>
                            <div class="product-title">
                                <h1>Temporary Product Name</h1>
                            </div>
                            <div class="product-price">
                                <h3>PHP 00.00</h3>
                            </div>
                        </div>
                        <div class="product-tile">
                            <a href="product_info.html" class="product-img-container"><img src="../styles/images/product_placeholder.png"
                                    alt=""></a>
                            <div class="product-title">
                                <h1>Temporary Product Name</h1>
                            </div>
                            <div class="product-price">
                                <h3>PHP 00.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <!-- Edit Later fixme -->
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

    // var container = document.getElementById("cont2");
    // window.onmousemove = function (e) {
    //     var x = - e.clientX / 5;
    //     var y = - e.clientY / 5;
    //     container.style.backgroundPositionX = x + 'px';
    //     container.style.backgroundPositionY = y + 'px';
    // }

    //Carousel auto-slider
    var counter = 1;
    setInterval(function () {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 3) {
            counter = 1;
        }
    }, 5000);

</script>

</html>