<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Circle Solutions</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/calibre.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/banner.js"></script>
    </head>
    <body>
        <header>
            <a href="index.html"><img src="img/logo.png" alt="Cirlce Solutions logo" id="logo"></a>
            <div id="menuflex">
                <ul id="menu">
                    <li><a href="index.html">home</a></li>
                    <li><a href="pakketten.html">pakketten</a></li>
                    <li><a href="specialisatie.html">specialisatie</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        </header>
        <div class="headerslider">

            <div class="slide" style="background-image: url(img/banner1.jpg);">
            </div>
            <div class="slide" style="background-image: url(img/banner2.jpg);">
            </div>
            <div class="slide" style="background-image: url(img/banner3.jpg);">
            </div>
            <div class="prev" onclick="changeSlide(-1)">&#10094;</div>
            <div class="next" onclick="changeSlide(1)">&#10095;</div>
            <div class="dots">
                <div class="dot active" onclick="currentSlide(1)">&nbsp;</div>
                <div class="dot" onclick="currentSlide(2)">&nbsp;</div>
                <div class="dot" onclick="currentSlide(3)">&nbsp;</div>
            </div>
        </div>
        <main>
			<div id="contactheader">
				<h1> contact </h1>
			</div>
				<?php
					if($_SERVER["REQUEST_METHOD"] == "POST"){
					$name = filter_input(INPUT_POST, "firstname");
					$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
					$subject = filter_input(INPUT_POST, "subject");
					$message = filter_input(INPUT_POST, "message");
					$newsletter = filter_input(INPUT_POST, "subscribe");
					$rick = $_POST["rick"];
					$pass = filter_input(INPUT_POST, "password");

					var_dump($rick);
					}
				?>
            
					<div class="containercontact">
					  <form action="contact.php">

						<label for="name">Naam</label>
						<input type="text" id="name" name="Naam" placeholder="Naam...">

						<label for="mail">E-mail</label>
						<input type="text" id="mail" name="E-mail" placeholder="E-mail...">
 
						<label for="phonenumber">Telefoon nummer</label>
						<input type="text" id="phonenumber" name="phonenumber" placeholder="Telefoon nummer...">

						<label for="message">Bericht</label>
						<textarea id="message" name="message" placeholder="..." style="height:200px"></textarea>

						<input type="submit" value="Verzenden">

					  </form>
					  
					  
					  	<aside>
							<p> circlesolutions.com </p>
							<p> hi@circlesolutions.com </p>
							<p> +31 612345678 </p>
						
						</aside>
						<div class="containercontact2">
							<img id="kantoorafb" src="img/kantoor.png" alt="kantoor">
						</div>
					</div>
					
					
            

        </main>
        <footer>
            <img src="img/logo-footer.png" alt="Circle Solutions logo" id="footerlogo">
            <p id="copyright">&copy; Cirlce Solutions 2022</p>
            <div id="footericons">
                <img src="img/facebook-icon.svg" alt="Facebook icon" class="footericon">
                <img src="img/twitter-icon.svg" alt="Twitter icon" class="footericon">
                <img src="img/instagram-icon.svg" alt="Instagram icon" class="footericon">
                <img src="img/linkedin-icon.svg" alt="Linkedin icon" class="footericon">
            </div>
        </footer>
    </body>
</html>