<?php
    session_start();
    require "db_conn.php";

    if(isset($_POST['user']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            return $data;
        }
    }

    $uname = validate($_POST['user']);
    $pass = validate($_POST['password']);
    
    try{
        $sql = "INSERT INTO users (username, password, email)
                    values ('$uname', '$pass', '$email')";

        $statement = $conn->query($sql);
        $success = $statement->execute();
    }catch(PDOExceoption $error){
        header("Location: newUser.php?error=Unable to create account:".$error->getMessage());
        exit();
    }
    if($success){
        echo "Redirecting...";
        $_SESSION['username'] = $uname;
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $pass;
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: newUser.php?error=Unable to create account.")
    }

?>