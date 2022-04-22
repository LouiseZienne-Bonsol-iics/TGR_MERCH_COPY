<!DOCTYPE html>
<html lang="en">
<?php 
    include('databaseConnect.php');
    session_start();
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/css/header_footer_style.css" />
    <link rel="stylesheet" href="../styles/css/loading_screen_style.css" />
    <link rel="stylesheet" href="../styles/css/aos.css" />
    <link rel="stylesheet" href="../styles/css/product_info_style.css" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

    <title>Product Info Page</title>
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

            <!--Products container-->
            <section class="prod-info-container">
                <section class="sub-container" id="subcont">
                    <div class="cont-restrict">

                        <ul class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li><a href="catalogue">Products</a></li>
                            <li style="color: white;"><?php $shirt = $_SESSION['shirt']; while($row = $shirt->fetch()){
                                echo $row['ProductName']?></li>
                        </ul>


                        <!-- Upper Product Section -->
                        <div class="card-wrapper">
                            <div class="card">
                                <!-- card left -->
                                <div class="product-imgs">
                                    <div class="img-display">
                                        <div class="img-showcase">
                                            <img src="../styles/images/<?php echo $row['ProductImage']?>" alt="shoe image">
                                            <img src="../styles/images/shirt_2.JPG" alt="shoe image">
                                            <img src="../styles/images/shirt_3.JPG" alt="shoe image">
                                            <img src="../styles/images/shirt_4.JPG" alt="shoe image">
                                        </div>
                                    </div>
                                    <div class="img-select">
                                        <div class="img-item">
                                            <a href="#" data-id="1">
                                                <img src="../styles/images/<?php echo $row['ProductImage']?>" alt="shoe image">
                                            </a>
                                        </div>
                                        <div class="img-item">
                                            <a href="#" data-id="2">
                                                <img src="../styles/images/shirt_2.JPG" alt="shoe image">
                                            </a>
                                        </div>
                                        <div class="img-item">
                                            <a href="#" data-id="3">
                                                <img src="../styles/images/shirt_3.JPG" alt="shoe image">
                                            </a>
                                        </div>
                                        <div class="img-item">
                                            <a href="#" data-id="4">
                                                <img src="../styles/images/shirt_4.JPG" alt="shoe image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card right -->
                                <div class="product-content">
                                    <h2 class="product-title">Teletigers 2021 Jersey</h2>
                                    <div class="product-price">
                                    <?php echo $row['ProductPrice'];}?>
                                    </div>

                                    <hr>

                                    <div class="product-availability">
                                        <h4>Availability</h4>
                                        <p>In Stock</p>
                                    </div>

                                    <div class="product-variation">
                                        <div class="choice-title">
                                            <h4>Select Variation</h4>
                                            <input type="radio" name="title" id="title-1" checked><label
                                                for="title-1">small</label>
                                            <input type="radio" name="title" id="title-2"><label
                                                for="title-2">medium</label>
                                            <input type="radio" name="title" id="title-3"><label
                                                for="title-3">large</label>
                                            <input type="radio" name="title" id="title-4"><label for="title-4">extra
                                                large</label>
                                        </div>
                                    </div>

                                    <div class="product-quantity">
                                        <h4>Quantity</h4>
                                        <span class="stepper">
                                            <button>–</button>
                                            <input type="number" id="stepper1" value="1" min="1" max="100" step="1">
                                            <button>+</button>
                                        </span>
                                    </div>

                                    <div class="purchase-buttons">
                                        <div class="buttons">
                                            <input type="submit" class="button btn-2" value="Add to Cart" name="cart"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lower Product Info -->
                        <div class="tabs">
                            <div class="tab-2">
                                <label for="tab2-1">Description</label>
                                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                                <div>
                                    <p>
                                        The Chinese Collar shirt is known for its short, unfolded stand-up collar and
                                        distinctive neck ribbing along the middle of the neck hole. It is a hybrid
                                        between
                                        a classic t-shirt and polo shirt.
                                    </p>
                                    <p>
                                        <b>Material:</b> <br>
                                        - Regular Fit <br>
                                        - 100% Polyester <br>
                                        - Men sizes from XS-4XL <br>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-2">
                                <label for="tab2-2">Shipping</label>
                                <input id="tab2-2" name="tabs-two" type="radio">
                                <div>
                                    <p>
                                        <b>When can we receive our merchandise?</b> <br>
                                        - The production takes about 15-30 days. Orders will be shipped by batches
                                        <br><br>
                                        <b>Where can we track our orders?</b> <br>
                                        - You’ll be given a code so you can track your order here in the website to know
                                        if its being processed,
                                        shipped to our warehouse, or if its being shipped to you by the courier we
                                        booked along with their tracking link <br>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-2">
                                <label for="tab2-3">Returns Policy</label>
                                <input id="tab2-3" name="tabs-two" type="radio">
                                <div>
                                    <p>
                                        - 1 week return policy to be returned to the manufacturer provided valid reason
                                        on why they want to return it (only damages) <br>
                                        - We’ll provide you a photo of your product when we receive it in our
                                        “warehouse” from the manufacturer before we ship it to you.<br>
                                        - We’ll inform you on what courier will be used but we won’t be responsible
                                        anymore if it is damaged during shipping to the customer<br>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
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

    //Image Slider Code
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);

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