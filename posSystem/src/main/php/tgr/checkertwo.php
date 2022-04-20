<?php

    if(isset($POST["submit"]))
    {
        echo "It Works";

        /*
        $username = $POST['username']; 
        $password = $POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = */
    }

    else
    {
        header("location: index.php");
    }






?>