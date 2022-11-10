<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
        <meta name="Mario And Asia Italian Restaurant" viewport="Mario And Asia Contact Information">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work Sans">
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anomymous"></script>
	    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
	    <title>Mario & Asia Italian Restaurant | Contact Us</title>
    </head>
    <body style="background-color: #e0e0e0; background-image: url('assets/img/woodwall.webp');background-size: contain;
    background-repeat: repeat">
	    <nav>
            <input type="checkbox" id="check">
               <label for="check" class="checkbtn">
                 <i class="fas fa-bars"></i>
                </label>
                <a href="index.php"><img class="logo" src="assets/img/MandAlogo.webp"></a>
                <ul>
                    <li><a class=" hover" href="index.php">Home</a></li>
                    <li><a class="hover" href="menu.php">Menu</a></li>
                    <li><a class="hover" href="about-us.php">About Us</a></li>
                    <li><a class="hover" href="faq.php">FAQ</a></li>
                    <li><a class="active hover" href="contact-us.php">Contact Us</a></li>
                </ul>
        </nav>
        <br><br><br><br>
        <img class="cntus" src="assets/img/abtusfrontpage.webp">
        <div class="contact-us">
            <div class="textmenu">
                <p id="pcntus">Contact Us. We can reach you.</p>
            </div>
            <div class="cntus-div">
                <div class="EmPho">
                    <span class="cnt">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="cnt1">
                        <h4 id="texth4">Email:</h4>
                    </span>
                        <p id="textp">(email coming soon!)</p>
                    <span class="cnt">
                        <i class="cnt fas fa-mobile"></i>
                    </span>
                    <span class="cnt1">
                        <h4 id="texth4">Phone Number:</h4>
                    </span>
                        <p id="textp">+63 (948) 199 5828</p>
                        <p id="textp">+63 (927) 231 8240</p>
                </div>
                <div class="fbmes">
                    <h4 id="texth4">Like us on Facebook:</h4>
                    <i class="soc sochov1 fab fa-facebook"><a  class="texta" href="https://www.facebook.com/MARIOANDASIA.ITALIAN.PIZZA">Mario & Asia Italian Restaurant</a></i>
                    <h4 id="texth4">Chat us on Messenger:</h4>
                    <i class="soc sochov2 fab fa-facebook-messenger"><a  class="texta" href="https://www.messenger.com/t/103574467833059">Mario & Asia Italian Restaurant</a></i>
                </div>
            </div>
            <center>
            <div class="address-div">
                <div class="branch1">
                    <span class="pin">
                        <i class="pin fas fa-map-marker-alt"></i>
                    </span>
                    <span class="pin1">
                        <h4 id="texth4">Main Branch:</h4>
                    </span>
                        <p id="textp">Purok 3 Barangay Santiago, 317 Arnaldo<br> Highway 4107 General Trias,<br>Cavite, Philippines</p>
                        <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30922.115013625018!2d120.87347777253754!3d14.354106007418409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.366055999999999!2d120.8843428!4m5!1s0x3397d55fecca4791%3A0x576388f788ce0433!2sMario%26Asia%20Italian%20Pasta%2FPizza%2C%20General%20Trias%2C%20Cavite!3m2!1d14.3421573!2d120.9071426!5e0!3m2!1sen!2sph!4v1621332555243!5m2!1sen!2sph" width="400" height="300" style="border: 1px;;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="branch2">
                    <span class="pin">
                        <i class="pin fas fa-map-marker-alt"></i>
                    </span>
                    <span class="pin1">
                        <h4 id="texth4">Bacao Branch:</h4>
                    </span>
                        <p id="textp" >Lavanya Subdivision (H Square Mall),<br>Bacao 4107 General Trias,<br>Cavite, Philippines</p>
                        <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30918.505719306428!2d120.86145524902214!3d14.380216454667414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.366055999999999!2d120.8843428!4m5!1s0x33962cc14e7d1ac5%3A0xe5cbf95b371118f8!2sNone%2C%20B9%2C%20L18%2C%20Phase%203%20Lavanya%20Subdivision%2C%20General%20Trias%2C%204107%20Cavite!3m2!1d14.4023218!2d120.8783412!5e0!3m2!1sen!2sph!4v1621333125003!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            </center>
            <div class="message">
            <form action="" method="POST">
            <center>
                <h3 class="messagetxt">Your feedback matters on us. Send us your feedback.</h3>
                <b><?php echo $alert; ?></b>
            </center>
                <br>
                <div class="flex">
                <span class="message1">
                    <input class="inputxt" type="text" name="fullname" placeholder="Fullname" required>
                    <input class="inputxt" type="text" name="email" placeholder="Email" required>
                    <input class="inputxt" type="text" name="subject" placeholder="Subject" required>
                </span>
                <span class="message2">
                    <textarea id="msgbox" type="text" name="message" placeholder="Message" required></textarea>
                </span>
                </div>
                <center><input type="submit" name="btnsub" value="Submit" id="sub_btn"></center>
                </form>
            </div>
        </div>
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
    <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);

    }
    </script>
</html>