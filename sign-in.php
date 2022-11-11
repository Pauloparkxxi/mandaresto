<?php
if(isset($_POST['btnreg']))
{
   header(("Location: sign-up.php"));
   exit();
}
if(isset($_POST['btnlog']))
{
   header(("Location: dashboard.php"));
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work Sans">
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/system.css">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anomymous"></script>
	    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
	    <title>Mario & Asia Italian Restaurant | Sign In</title>
    </head>
    <body style="background-color: #e0e0e0; background-image: url('assets/img/woodwall.webp');background-size: contain;
    background-repeat: repeat">
	    <nav>
            <a href="index.php"><img class="logo" src="assets/img/MandAlogo.webp"></a>
	    	<p class="hover">Italian Restaurant · Pizza Place</p>
        </nav>
        <br><br><br><br>
            <!-- <img class="logsign"src="assets/img/building3.png"> -->
            <div class="col-sm-4" id='login_container'>
                <center>        
                <form action="sign-in.php" method="POST">
                <h3 id="title_head"><b>Log in your account</b></h3>
                <span id="error"><b><br><!--?php
                  if (isset($_SESSION['msg'])) {
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                   }
                   echo $error;
                ?>-->
                </b></span><br><br>
                       <input class="inttxt" type="text" name="username" placeholder="Username"><br><br>
                       <input class="inttxt" type="password" name="pass" placeholder="Password"><br><br>
                       <input type="submit" name="btnlog" value="Sign in" id="log_btn">
                       <br><b style="font-family: Work Sans;">Still don't have an account?</b><br>
                       <input type="submit" name="btnreg" value="Sign Up" id="sign_btn"><br>
                </form>
                </center>
                </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer class="footerlink">
	    	<div class="foot">
            <a class="fhover footer" href="index.php">Home</a>
            <a class="fhover footer" href="menu.php">Menu</a>
            <a class="fhover footer" href="about-us.php">About Us</a>
            <a class="fhover footer" href="faq.php">FAQ</a>
            <a class="fhover footer" href="contact-us.php">Contact Us</a>
            <div class="social-media">
                <a href="https://www.facebook.com/MARIOANDASIA.ITALIAN.PIZZA" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.messenger.com/t/103574467833059" class="social-icon">
                <i class="fab fa-facebook-messenger"></i>
                </a>
                <p class="pfooters">Stay connected with us!!</p>
            </div>
            </div>
            <a disabled><img class="logofooter" src="assets/img/MandAlogo.webp"></a>
            <p class="pfooter">Italian Restaurant · Pizza Place</p>
        </footer>
        <footer class=foot>
        <p class="pfooter2">Mario & Asia Italian Restaurant | © 2021</p>
        </footer>
   </body>
   <script type="text/javascript" src="assets/js/vanilla-tilt.js">
        VanillaTilt.init(document.querySelector(".main"), {
        max: 25,
        speed: 400  
    });
    </script>
</html>