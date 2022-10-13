var slideIndex = 1;
showDivs(slideIndex);

function currentSlide(n) {
    showDivs(slideIndex = n);
}

function changeSlide(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
var i;
var slides = document.querySelectorAll(".headerslider .slide");
var dots = document.querySelectorAll(".headerslider .dots .dot");

if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "flex";
dots[slideIndex-1].className += " active";
}

var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.querySelectorAll(".headerslider .slide");
var dots = document.querySelectorAll(".headerslider .dots .dot");
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    dots[i].className = dots[i].className.replace(" active", "");
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "flex";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
    dots[slideIndex-1].className += " active";
}