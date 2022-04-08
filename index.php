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
                <button class="btnn" type="submit"><b>Login</b></button>

                <p class="link">Don't have an account?<br>
                    <a href="register.php">Sign up </a> here</p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="#">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-yahoo"></ion-icon>
                    </a>
                </div>
            </div>
        </form>

    </div>
</div>


<!----About section start---->
<div class="about" id = "about">
    <div class="title">
      <h2><i>About Us!</i></h2>
    </div>
    <div class="drone_logo">
            <img src="css/AgriDrone2.png" alt="drone" width="30%" height="30%" align="right" style="padding:35px">
    </div>
    <div class="about-text" style="padding:35px">
            <p>csccscscscsscs dchsdcushciuhsuchsuchsuchsdcuhsch<br>schsuchsuchsduchsduchsduchsuc chuishuchsdchsudhchsdc scuschsu cshcdsuchsudchs<br>cschsuchsudchsuchsuchsuch shcsuchsuchsuchuchsuc hcuschusdchusdch sdchsducodchach;<br>c hsdchsduochsd;uchsd ;shcosdchsch;sch;sdchsd;dchsdu<br>cscscscvfjnioksopkaxkakncjjcnac</p>
    </div>
</div>


<!-----service section start----------->
<div class="service" id = "service" >
    <div class="title">
      <h1><i>Our Services</i></h1>
    </div>

    <div class="box">
      <div class="card">
        <ion-icon name="leaf-sharp"></ion-icon>
        <h5>Farming</h5>
        <div class="pra">
          <p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>

      <div class="card">
        <ion-icon name="eye"></ion-icon>
        <h5>Monitoring</h5>
        <div class="pra">
          <p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>

      <div class="card">
        <ion-icon name="bar-chart-sharp"></ion-icon>
        <h5>Fields And Soils Analysis</h5>
        <div class="pra">
          <p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </div>
</div>


<!-----contact section start----------->
<div class="contact" id="contact">
    <div class="title">
      <h2><i>Contact Us!</i></h2>
    </div>
    <div class="left">
        <div class="location" style="float:left">
            <h3><span><ion-icon name="map"></ion-icon></span>&nbsp
                MARA-Japan Industrial Institute,<br>
                Lot 2333 Jalan Kajang Seremban,<br>
                43700 Beranang, Selangor, Malaysia</h3>
            <p>
                <br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7969.381701296483!2d101.864251!3d2.905087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f783f53f43fe208!2sMARA%20Japan%20Industrial%20Institute%20-%20Formerly%20Kolej%20Kemahiran%20Tinggi%20Mara%20Beranang!5e0!3m2!1sen!2smy!4v1646898627331!5m2!1sen!2smy" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </p>
        </div>
    </div>

    <div class="right" style="float:left">
        <div class="phone">
            <h3><span><ion-icon name="call-sharp"></ion-icon></span>&nbsp
                +6 (03) 872 49344 / 55</h3><br>
        </div>

        <div class="fax">
            <h3><span><ion-icon name="print-sharp"></ion-icon></span>&nbsp
                +6 (03) 872 49275</h3><br>
        </div>

        <div class="email">
            <h3><span><ion-icon name="mail"></ion-icon></span>&nbsp
                mjiiberanang@mjii.kktm.edu.my</h3>
        </div>
    </div>
</div>
</body>

</html>