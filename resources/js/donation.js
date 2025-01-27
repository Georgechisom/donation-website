const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

 // scroll
(function () {
  "use strict";  

  const navbar= document.querySelector("#my-nav");

  document.addEventListener("scroll", (e) => {
  const specialEff = document.scrollingElement.scrollTop;
  
  if (specialEff > 30) { //adjust to suit your need of when transition start
      navbar.classList.add("special");
  } else {
      navbar.classList.remove("special");
  }
  });
})();

var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("divineslides");
for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}

// $(document).ready(function(){
//   $('.owl-carousel').owlCarousel({
//     stagePadding: 50,
//     loop: true,
//     margin: 10,
//     autoplay:true,
//     item: 4,
//     autoplayTimeout:3000,
//     autoplayHoverPause:true,
//     animateOut: 'fadeOut',
//     nav: true,
//     navText: [
//       '<i class="fa fa-angle-left" aria-hidden="true"></i>',
//       '<i class="fa fa-angle-right" aria-hidden="true"></i>'
//     ],
//     navContainer: '.main-content .custom-nav',
//     responsive:{
//       0:{
//         items: 1
//       },
//       600:{
//         items: 3
//         nav:false,
//         margin: 50
//       },
//       1000:{
//         items: 4
//       }
//       1200:{
//         items: 5
//       }
//     }
//   });
// });