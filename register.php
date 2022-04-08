<!DOCTYPE html>
<html lang="en">
<?php include ('templates/header.php');?>
<head>
</head>

<body>

    

    <div class="main">
        <form class="formm" method="POST" action="auth.php">

                    <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['email'])) { ?>
                     <input type="email" name="email" value="<?php echo $_GET['email']; ?>"><br>
                    <?php }else{ ?>
                        <input type="email" name="email" placeholder="Enter Email" required>
                    <?php }?>

                    <?php if (isset($_GET['uname'])) { ?>
                     <input type="text" name="uname" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text" name="uname" placeholder="Enter Username" required>
                    <?php }?>

     	            <input type="password" name="pass" placeholder="Enter Password"><br>
                     
                    <input type="password" name="repass" placeholder="Confirm Password"><br>

                    <button class="btnn" type="submit" name ="submit"><b>Register</b></button>
                    

                    <p class="link">Already have an account ?<br>
                        <a href="index.php">Log In</a> here</p>

        </form>
    </div>


</body>

</html>