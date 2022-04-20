<?php

    $host = "localhost";
    $port = "3306";
    $dbUserName = "root";
    $dbPassword = "root";
    $dbName = "tgr_merch";
    $tableDB = "users";
    if(isset($_POST['login']))
    {
        $dbconn = mysqli_connect($host, $dbUserName, $dbPassword, $dbName);

        if (!$dbconn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        else
        {
            $userName = mysqli_real_escape_string($dbconn,$_POST['username']);
            $userPassword = mysqli_real_escape_string($dbconn,$_POST['password']);
            $sql_query = "SELECT id FROM $tableDB WHERE username = '$userName' and password = '$userPassword'";
            $result = mysqli_query($dbconn,$sql_query);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $active = $row['active'];
            $count = mysqli_num_rows($result);

            if($count = 1)
            {
                header('Location:databaseControl.html?status=SUCCESS');
                echo "Connected successfully";
            }

        }
    }
?>
