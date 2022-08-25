<?php 
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        return data;
    }
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

if(empty($uname)){
    header ("Location: login.php?error=Username is required");
    exit();
}
else if(empty($pass) || (strlen(pass) < 5)){  //Pass is empty OR does not meet length requirements, it automatically is invalid -> No need to connect to DB
    header ("Location: login.php?error=Password is invalid");
    exit();
}

//Query statement
$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

$result = mysqli_query($conn, $sql);

//Parsing query results
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);

    if($row['user_name'] === $uname && $row['password'] === $pass){
        echo "Redirecting...";
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    //if username and password doesn't match -> error
    else{
        header("Location: login.php?error=Incorrect Login Credentials");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();
}
//ADDED THIS MYSELF
?>