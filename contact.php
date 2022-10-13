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
            <img src="img/logo.png" alt="Cirlce Solutions logo" id="logo">
            <div id="menuflex">
                <ul id="menu">
                    <li><a href="index.html">home</a></li>
                    <li><a href="pakketten.html">pakketten</a></li>
                    <li><a href="specialisatie.html">specialisatie</a></li>
                    <li><a href="#">contact</a></li>
                </li>
            </div>
        </header>
        <div class="headerslider">

            <div class="slide" style="background-image: url(img/banner1.jpg);">
            </div>
            <div class="slide" style="background-image: url(img/banner1.jpg);">
            </div>
            <div class="slide" style="background-image: url(img/banner1.jpg);">
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
            
            

        </main>
        <footer>
            <img src="img/logo-footer.png" alt="Circle Solutions logo" id="footerlogo">
            <p id="copyright">&copy Cirlce Solutions 2022</p>
            <div id="footericons">
                <img src="img/facebook-icon.svg" alt="Facebook icon" class="footericon">
                <img src="img/twitter-icon.svg" alt="Twitter icon" class="footericon">
                <img src="img/instagram-icon.svg" alt="Instagram icon" class="footericon">
                <img src="img/linkedin-icon.svg" alt="Linkedin icon" class="footericon">
            </div>
        </footer>
    </body>
</html>