<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/css/header_footer_style.css" />
    <link rel="stylesheet" href="../styles/css/loading_screen_style.css" />
    <link rel="stylesheet" href="../styles/css/help_style.css" />
    <link rel="stylesheet" href="../styles/css/aos.css" />
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

    <title>Help Page</title>
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
        <section class="main-header-container" style="height: min-content;">
            <div class="header-container" data-aos="fade-in">
                <div class="header_logo">
                    <a href="#"><img src="../styles/images/LOGO_TELETIGERS 3.png" class="tgr_logo"><img
                            src="../styles/images/Teletigers Text.png" class="text_logo" /></a>
                </div>
                <ul class="header-opt">
                    <li><a href="index.php">home</a></li>
                    <li><a href="catalogue.php">products</a></li>
                    <li><a href="wip.php">services</a></li>
                    <li><a href="order_status.php">tracking</a></li>
                    <li><a href="help.php">FAQs</a></li>
                </ul>

                <div class="header-icons-container">
                    <form class="search-form" action="">
                        <input class="search-input" type="search" placeholder="Search here ...">
                        <i class="fa fa-search"></i>
                    </form>
                    <a href="cart.php">
                        <img src="../styles/images/shopping-bag.png" class="bag-icon" />
                    </a>
                </div>
            </div>

        </section>

        <!--help container-->
        <section class="help-container-2">
            <section class="help-container">
                <div class="help-search-container">
                    <div class="wrapper">
                        <div class="heading-text">Help</div>
                        <div class="searchBar">
                            <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search"
                                value="" />
                            <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#666666"
                                        d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <hr style="border-color: #747474;">

                <div class="faq-container">
                    <div class="sidebar">
                        <!-- <h1>Customer Services</h1> -->
                        <a href="index.php">
                            <h2>Home</h2>
                        </a>
                        <a href="">
                            <h2>Contact Us</h2>
                        </a>
                        <a href="order_status.php">
                            <h2>Order Status</h2>
                        </a>
                        <a href="">
                            <h2>Shipping Information</h2>
                        </a>
                        <a href="">
                            <h2>Size Guide</h2>
                        </a>
                        <a href="">
                            <h2>Payment and Prices</h2>
                        </a>
                        <a href="">
                            <h2>Terms and Conditions</h2>
                        </a>
                    </div>

                    <div class="faq-main">
                        <div class="heading-text">Frequently Asked Questions</div>

                        <div class="container">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="false"><span
                                            class="accordion-title">Proof of Payment</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae
                                            et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" aria-expanded="false"><span
                                            class="accordion-title">Ordering</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>- Orders will be confirmed once payment is placed by the customer. <br>
                                            - All merchandise is available for pre-order only. All orders will be
                                            accepted through filling up this form.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-3" aria-expanded="false"><span
                                            class="accordion-title">Returns Policy</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>
                                            - 1 week return policy to be returned to the manufacturer provided valid
                                            reason on why they want to return it (only damages) <br>
                                            - We’ll provide you a photo of your product when we receive it in our
                                            “warehouse” from the manufacturer before we ship it to you. <br>
                                            - We’ll inform you on what courier will be used but we won’t be responsible
                                            anymore if it is damaged during shipping to the customer
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-4" aria-expanded="false"><span
                                            class="accordion-title">Shipping</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>
                                            <b>When can we receive our merchandise?</b><br>
                                            - The production takes about 15-30 days. Orders will be shipped by
                                            batches<br><br>
                                            <b>Where can we track our orders?</b><br>
                                            - You’ll be given a code so you can track your order here in the website to
                                            know if its being processed, shipped to our warehouse, or if its being
                                            shipped to you by the courier we booked along with their tracking link
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-5" aria-expanded="false"><span
                                            class="accordion-title">Order Status</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>- We’ll give you your Order Number so you can track your order and how it is
                                            being processed on our website. All orders will be confirmed via email.
                                        </p>
                                    </div>
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
                            <a href="">
                                <h2>Return Policy</h2>
                            </a>
                            <a href="">
                                <h2>Accessibility</h2>
                            </a>
                            <a href="">
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

    //Dropdown-start
    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
    //Dropdown-end

</script>

</html>