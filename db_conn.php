<?php

    require "../configs/config.php";

    $conn = mysqli_connect($host, $db_uname, $db_password, $db_logins);

    if(!$conn){
        echo "Connection Failed";
    }
?>