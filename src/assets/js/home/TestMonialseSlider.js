
$(document).ready(function() {
    $('.carousel').flickity({
        wrapAround: true, 
        pageDots: false,
        // draggable: false, 
        contain: true,
        autoPlay: true, 
        prevNextButtons: false 
      });
  
    // Add event listeners for previous and next buttons
    $('.next-btn').click(function() {
      $('.carousel').flickity('next');
    });
  
    $('.prev-btn').click(function() {
      $('.carousel').flickity('previous');
    });
  });
  

