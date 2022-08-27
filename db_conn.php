<?php

    require "../configs/config.php";
//	header("Location: login.php?error=".$host);
    //$conn = mysqli_connect($host, $db_uname, $db_password, $db_logins)
    try{
	$conn = new PDO($dsn, $db_uname, $db_password);
    }catch(PDOException $e){
	header("Location: login.php?error=Connection Error".$e->getMessage());
	exit();
    }
?>
