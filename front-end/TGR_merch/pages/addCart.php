<?php
    session_start();
 
    //check if product is already in the cart
    if(!in_array($_GET['id'], $_SESSION['cart']))
    {
        if(!in_array($_GET['size'], $_SESSION['prodSize']))
        {
            $_SESSION['cart'] = $_GET['id'];
            $_SESSION['prodSize'] = $_GET['size'];
            $_SESSION['prodNum'] = $_GET['num'];
            $_SESSION['message'] = 'Product added to cart';
        }
    }
    else{
        $_SESSION['message'] = 'Product already in cart';
    }
 
    header('location: catalogue.php');
?>