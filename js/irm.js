
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function showSlides(n) {
    var slides = document.getElementsByClassName("Actuali");
    if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
    slides[slideIndex-1].style.display = "block";
    }

/* <div class="connaissances">
                    <h2 class="connaisances-heading">Connaissances acquises</h2>
                    <p class="savoir-plus-para">
                        Algorithmique, programmation,logique,, réseaux, 
                        , bases de données, développement Web, développement mobile, 
                        maths pour l’informatique, intelligence artificielle,sécurité réseau.	
                    </p>
                    </div> */
