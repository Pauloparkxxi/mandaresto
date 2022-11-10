<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
        <meta name="Mario And Asia Italian Restaurant" viewport="Mario And Asia Website">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work Sans">
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anomymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
	    <title>Mario & Asia Italian Restaurant | Home</title>
    </head>
    <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="8TCEW4Sv">
        </script>
    <body style="background-color: #e0e0e0; background-image: url('assets/img/woodwall.webp');background-size: contain;
    background-repeat: repeat">
	    <nav>
            <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                    <a href="index.php"><img class="logo" src="assets/img/MandAlogo.webp"></a>
                        <ul>
                            <li><a class="active hover" href="index.php">Home</a></li>
                            <li><a class="hover" href="menu.php">Menu</a></li>
                            <li><a class="hover" href="about-us.php">About Us</a></li>
                            <li><a class="hover" href="faq.php">FAQ</a></li>
                            <li><a class="hover" href="contact-us.php">Contact Us</a></li>
                        </ul>
        </nav>
        <br><br><br><br>
        <div class="galleryContainer">
            <div class="slideShowContainer">
                <div id="playPause" onclick="playPauseSlides()"></div>
                <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
                <div class="imageHolder">
                    <img src="assets/img/slide-1.webp">1366X768
                    <p class="captionText"></p>
                </div>
                    <div class="imageHolder">
                        <img src="assets/img/slide-2.webp">
                        <p class="captionText"></p>
                    </div>
                    <div class="imageHolder">
                        <img src="assets/img/slide-3.webp">
                        <p class="captionText"></p>
                    </div>
                    <div class="imageHolder">
                        <img src="assets/img/slide-4.webp">
                        <p class="captionText"></p>
                    </div>
            </div>
            <div id="dotsContainer">

                </div>
        </div>
        <img class="flag1" src="assets/img/flaghome.webp">
        <center>
            <div>
                <p id="pmenu">Ciao!!! Welcome to our resto page!!</p>
            </div>
                <div class="homepage">
                    <a id="homelink" href="menu.php">
                    <div class="home bestsellerhome1">
                        <p id="pbsh1">Looking for our menu?</p>
                        <img id="bsh1" src="assets/img/menuclick.webp" alt="Mario & Asia Food Menu">
                    </div>
                    </a>
                    <a id="homelink" href="menu.php">
                    <div class="home bestsellerhome2">
                        <p id="pbsh">Find out what are the</p>
                        <img id="bsh2" src="assets/img/bestsellerhome.webp" alt="Mario & Asia Best Seller"><a class="homelinks" src="menu.php"></a>
                    </div>
                    </a>
                    <a id="homelink" href="branch-gallery.php">
                    <div class="home bestsellerhome3">
                        <p id="pbshw">Our branch gallery</p>
                        <img id="bsh3" src="assets/img/office.webp" alt="Mario & Asia Best Gallery">
                    </div>
                    </a>
                    <div class="home bestsellerhome4">
                        <p id="pbsh">Try this pasta!!</p>
                        <img id="bsh4" src="assets/img/alpesto.webp" alt="Mario & Asia Al Pesto">
                    </div>
                    <div class="home bestsellerhome5">
                        <p id="pbshw">Try this pizza!!</p>
                        <img id="bsh5" src="assets/img/pizzaasia.webp" alt="Mario & Asia Pizza Asia">
                    </div>
                    <a id="homelink" href="#">
                    <div class="home bestsellerhome6">
                        <p id="pbshw">Wanna be part of us?</p>
                        <img id="bsh6" src="assets/img/careers.webp" alt="Mario & Asia Best Careers">
                    </div>
                    </a>
                </div>
        </center>
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
    <script type="text/javascript" src="assets/js/myScript.js">
    </script>
    <!-- <script type="text/javascript" src="assets/js/vanilla-tilt.js">
        VanillaTilt.init(document.querySelector(".home"), {
        max: 25,
        speed: 400  
    });
    </script> -->
</html>