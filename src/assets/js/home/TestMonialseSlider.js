$(document).ready(function() {
  // Initialize the carousels
  $('.carousel').flickity({
    wrapAround: true, 
    pageDots: false,
    contain: true,
    autoPlay: 7500, 
    prevNextButtons: false 
  });

  $('.carousel_').flickity({
    wrapAround: true, 
    pageDots: false,
    contain: true,
    autoPlay: 7500, 
    prevNextButtons: false 
  });

  // Add event listeners for previous and next buttons
  $('.next_btn').click(function() {
    $('.carousel').flickity('next');
    $('.carousel_').flickity('next');
  });

  $('.prev_btn').click(function() {
    $('.carousel').flickity('previous');
    $('.carousel_').flickity('previous');
  });
});
