<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Circle Solutions</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/calibre.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
          <a href="index.html" id="logolink"><img src="img/logo.png" alt="Cirlce Solutions logo" id="logo"></a>
            <div id="menuflex">
				<nav class="navbar">
					<ul class="nav-menu">
						<li class="nav-item">
							<a href="index.html" class="nav-link">home</a>
						</li>
						<li class="nav-item">
							<a href="pakketten.html" class="nav-link">pakketten</a>
						</li>
						<li class="nav-item">
							<a href="specialisatie.html" class="nav-link">specialisatie</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link">contact</a>
						</li>
					</ul>
					<div class="hamburger">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>
                </nav>
			</div>
        </header>
        <script src="js/hbmenu.js"></script>
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
		<script src="js/banner.js"></script>
        <main>
			<div id="contactheader">
				<h1> contact </h1>
			</div>
				<?php
					if($_SERVER["REQUEST_METHOD"] == "POST"){
					$name = filter_input(INPUT_POST, "firstname");
					$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
					$phonenumber = filter_input(INPUT_POST, "phonenumber");
					$message = filter_input(INPUT_POST, "message");
					
					
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

					  </form>
					
					  	<aside>
							<div class="contacticonposition">
								<img id="contacticon" src="img/websiteicon.png" alt="websiteicon">
								<p> circlesolutions.com </p>
							</div>
							<div class="contacticonposition">
								<img id="contacticon" src="img/mailicon.png" alt="mailicon">
								<p> hi@circlesolutions.com </p>
							</div>
							<div class="contacticonposition">
								<img id="contacticon" src="img/phoneicon.png" alt="phoneicon">
								<p> +31 612345678 </p>
							</div>
								<img id="kantoorafb" src="img/kantoor.png" alt="kantoor">
						</aside>
						
						<input type="submit" onclick="openPopup()" value="Verzenden">
						
						<div class="popup" id="popup">
						
							<img src="img/check.png" alt="check">
							<h2>Bericht verzonden!</h2>
							<p>Verwacht een antwoord binnen 3 dagen</p>
							<button type="button" onclick="closePopup()">OK</button>
							
						</div>
						
						<script>
							let popup = document.getElementById("popup");
							
							function openPopup(){
								popup.classList.add("open-popup");
							}
							
							function closePopup(){
								popup.classList.remove("open-popup");
							}
						</script>
						
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