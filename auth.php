<?php 
session_start(); 
include "config.php";

if (isset($_POST['email']) && isset($_POST['uname'])
    && isset($_POST['pass']) && isset($_POST['repass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $email = validate($_POST['email']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pass']);
	$repass = validate($_POST['repass']);
	

	$user_data = 'uname='. $uname. '&email='. $email;


	if (empty($email)) {
		header("Location: register.php?error=Email is required&$user_data");
	    exit();

	}else if(empty($uname)){
        header("Location: register.php?error=Username is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($repass)){
        header("Location: register.php?error=Confirm Password is required&$user_data");
	    exit();
	}else if($pass !== $repass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email ='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=Email already exist&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, uname, pass ) VALUES('$email','$uname', '$pass' )";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}