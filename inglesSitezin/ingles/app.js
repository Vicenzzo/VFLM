// const flightPath = {
//     curviness: 1.25,
//     autoRotate: true,
//     values:[{x: 100, y: -20},
//             {x: 300, y: 10}, 
//             {x: 500, y: 100}, 
//             {x: 750, y:-100},
//             {x: 350, y: -50},
//             {x: 600, y: 100},
//             {x: 800, y: 0},
//             {x: window.innerWidth, y: -450}
//         ]
// };

// const tween = new TimelineLite();

// tween.add(
//     TweenLite.to(".paper-plane", 1, {
//         bezier: flightPath,
//         ease: Power1.easeInOut
//     })
// );

// const controller = new ScrollMagic.Controller(); 

// const scene = new ScrollMagic.Scene({
//     triggerElement: '.animation',
//     duration: 4000,
//     triggerHook: 0
// })
// .setTween(tween)
// .setPin('.animation')
// .addIndicators()
// .addTo(controller);




////////////////galeriaSLIDER////////
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
////////////////////////////////////////