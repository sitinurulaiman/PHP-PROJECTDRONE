<!DOCTYPE html>
<html lang="en">
<?php include ('templates/header.php');?>
<head>
    
</head>
<body>

    <div class="main">
        <div class="content">
            <h1>Smart IoT <br>Agriculture Drone <br></h1>
            <form action="login.php" method="POST">
                <div class="form">

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <input type="email" name="email" placeholder="Email ">
                    <input type="password" name="pass" placeholder="Password">
                    <button class="btnn" type="submit">Login</button>



                    <p class="link">Don't have an account<br>
                        <a href="register.php">Sign up </a> here</p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#">
                            <ion-icon name="logo-google"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-yahoo"></ion-icon>
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>


    <section class="about" id="about">

        <div class="about-text">
            <h2><i>About Us</i></h2>
            <h5>Developer <span>& Designer</span></h5>
            <p class="par">Businesses across all industries are already using drones to improve their operations.
                <br>Every business is different. We can provide you with your own unique
                <br>drone solution to scale your business.</p>
        </div>
    </section>



    <div class="service" id="service">
        <div class="title">
            <h2><i>Our Services</i></h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fas fa-seedling"></i>
                <h5>Farming</h5>
                <div class="pra">
                    <p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-eye"></i>
                <h5>Monitoring</h5>
                <div class="pra">
                    <p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-poll"></i>
                <h5>Fields And Soils Analysis</h5>
                <div class="pra">
                    <p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="contact_explaination" id="contact">
        <div class="title">
            <h2><i>Contact Us!</i></h2>
        </div>
        <div left>
            <div class="location" style="padding:35px;float:left">
                <h2><span><i class="fas fa-map' style='font-size:30px;color:black"></i></span> MARA-Japan Industrial Institute,<br> Lot 2333 Jalan Kajang Seremban,<br> 43700 Beranang, Selangor, Malaysia</h2>
                <p>
                    <br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7969.381701296483!2d101.864251!3d2.905087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f783f53f43fe208!2sMARA%20Japan%20Industrial%20Institute%20-%20Formerly%20Kolej%20Kemahiran%20Tinggi%20Mara%20Beranang!5e0!3m2!1sen!2smy!4v1646898627331!5m2!1sen!2smy"
                        width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </p>

            </div>
        </div>

        <div right style="padding:35px;float:left">
            <div class="phone">
                <h2><span><i class="fas fa-phone-volume" style="font-size:30px;color:black"></i></span> +6 (03) 872 49344/ 55</h2><br>
            </div>

            <div class="fax">
                <h2><span><i class="fa fa-fax" style="font-size:30px;color:black"></i></span> +6 (03) 872 49275</h2><br>
            </div>

            <div class="email">
                <h2><span><i class="fa fa-envelope" style="font-size:30px;color:black"></i></span> mjiiberanang@mjii.kktm.edu.my
                </h2>
            </div>
        </div>
    </div>
</body>

</html>