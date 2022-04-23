<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include('databaseConnect.php');
    $tableDB = "orders";
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/css/header_footer_style.css" />
    <link rel="stylesheet" href="../styles/css/loading_screen_style.css" />
    <link rel="stylesheet" href="../styles/css/aos.css" />
    <link rel="stylesheet" href="../styles/css/payment_proof_style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,800" rel="stylesheet">
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

    <title>Upload Proof of Payment</title>
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
        <!--container 2 -->
        <section class="payproof-container">
            <section class="container-2" id="cont2">
                <div class="cont-restrict">
                    <div class="page-heading-labels">
                        <h1 class="order-headers">Thank you for ordering!</h1>
                        <hr>
                    </div>
                    <center>
                        <p class="subheading-text">
                            Your order <?php $amtOrder=1; 
                            if(!empty($_SESSION['OrderAmt'])){
                            while($_SESSION['OrderAmt'] >= $amtOrder)
                            {   
                                echo $_SESSION['IDOrder'.$amtOrder] . ', ';
                                $amtOrder++;
                            }}
                            else
                            { 
                                echo $_SESSION["IDOrder"];
                                } ?> has been received!
                        </p>
                    </center>
                    
                    <div class="customer-cont">
                        <div class="customer-item">
                            <label>Order Placing Date:</label>
                            <div class="customer-value" id="order-date"><?php echo $_SESSION['DateOrder'];?></div>
                        </div>
                        <div class="customer-item">
                            <label>Order Number:</label>
                            <div class="customer-value" id="order-no"><?php $amtOrder=1; 
                            if(!empty($_SESSION['OrderAmt'])){
                            while($_SESSION['OrderAmt'] >= $amtOrder)
                            {   
                                echo $_SESSION['IDOrder'.$amtOrder] . ', ';
                                $amtOrder++;
                            }}
                            else{
                                echo $_SESSION["IDOrder"];
                            
                            } ?></div>
                        </div>
                        <div class="customer-item">
                            <label>Customer Name:</label>
                            <div class="customer-value" id="customer-name"><?php echo $_SESSION['NameCustomer'];?></div>
                        </div>
                    </div>

                    <p class="body-text">
                        In order to process your order, we would need to confirm your payment first. Kindly accomplish payment via selected payment method  
                        <span style="font-weight: 900;">within 3 days</span> 
                         upon your order placing date.
                        <br><br>
                        Please upload a clear 
                        <span style="font-weight: 900;">JPEG or PNG image file (not more than 1MB)</span>
                         of your proof of payment via link below. 
                    </p>

                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" class="file-upload" id="filename" name="filename">
                        <div class="buttons">
                            <input type="submit" class="button btn-2" value="Upload Proof of Payment" name="fileUpload" ></input>
                        </div>
                    </form>

                    <?php
                        if (isset($_POST['fileUpload'])) 
                        {
                            $filetype = array('application/pdf','image/jpeg','image/jpg','image/png');
                            if(in_array($_FILES["filename"]["type"],$filetype))
                            {
                                $filename = $_FILES["filename"]["name"];
                                $tempname = $_FILES["filename"]["tmp_name"];    
                                $folder = "uploads/".$filename;
                                $IDOrder = $_SESSION['IDOrder'.$amtOrder]; 
                            
                                // Get all the submitted data from the form
                                $sql = "Update orders set PaymentImage='$filename' WHERE OrderID='$IDOrder'";
                            
                                // Execute query
                                $pdo->query($sql);
                                    
                                // Now let's move the uploaded image into the folder: image
                                if (move_uploaded_file($tempname, $folder))  {
                                    $msg = "Image uploaded successfully";
                                }
                                else
                                {
                                    $msg = "Failed to upload image";
                                }
                            }
                        }
                    ?>

                    <hr>

                    <p class="body-text">
                        In case payment would be made on a later date, this page can still be accessed through the Order Tracking page. Take note of your order number for your reference. 
                    </p>

                    <div class="buttons">
                        <a href="order_status.php" class="button btn-1">Check Order Status</a>
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
                            <a href="help.php">
                                <h2>Return Policy</h2>
                            </a>
                            <a href="help.php">
                                <h2>Accessibility</h2>
                            </a>
                            <a href="help.php">
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
</script>
</html>