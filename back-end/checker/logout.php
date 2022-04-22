<?php
    session_start();

    //Unsets the sessions
    unset($_SESSION['username']);
    unset($_SESSION['supersecret']);
    $_SESSION['wrong'] = null;

    header('Location:../../front-end/TGR_merch/pages/login.php');
?>