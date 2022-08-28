<?php

    require "../configs/config.php";
<<<<<<< HEAD
    //function $connect($table){} //f(table name) -> php can pass the table name and reuse this function to make a connection 
    try{
	    $conn = new PDO($dsn, $db_uname, $db_password);
    }catch(PDOException $e){
	    header("Location: login.php?error=Connection Error".$e->getMessage());
	exit();
=======

    $conn = mysqli_connect($host, $db_uname, $db_password, $db_logins);

    if(!$conn){
        echo "Connection Failed";
>>>>>>> parent of 192dcd2 (Working connection with Database; Need to build out homepage)
    }
?>