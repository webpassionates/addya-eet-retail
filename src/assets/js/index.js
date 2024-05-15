//const $ = require('jquery');
$(document).ready(function () {
  // jQuery code here
  // console.log("Welcome to index.js for EET");
  $('.cust-slider-img').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 3000,
    // speed: 2000,
    asNavFor: '.cust-slider-nav'
  });
  $('.cust-slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: false,
    arrows: false,
    centerMode: true,
    centerPadding: '15px',
    focusOnSelect: true,
    vertical: true,
    verticalSwiping: true,
    asNavFor: '.cust-slider-img',
  });

});



document.addEventListener('DOMContentLoaded', function () {
  const hamburgerBtn = document.querySelector('.hamburger-btn');
  const mediaSection = document.getElementById('media-section');

  hamburgerBtn.addEventListener('click', function () {
    mediaSection.classList.toggle('open');
  });
});




// form validation  for speak to us

// $(document).ready(function() {
//   $('#contactForm').submit(function(event) {
//       if (this.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//       }
//       $(this).addClass('was-validated');
//   });
// });