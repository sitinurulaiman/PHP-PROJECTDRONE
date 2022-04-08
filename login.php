<?php

session_start();
include "config.php";

if (isset($_POST['email']) && isset($_POST['pass'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);

    if (empty($email)){
        header("Location: index.php?error= Email is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error= Password is required");
        exit();
    }
    else{

        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['pass'] === $pass ){
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error = Incorrect Email or Password");
                exit();
            }
        }else{
            header("Location: index.php?error = Incorrect Email or Password");
            exit();
        }
        }
    }
else{
    header("Location: index.php");
    exit();
}


