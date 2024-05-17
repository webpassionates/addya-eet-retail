
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
    $('.next_btn').click(function() {
      //alert("Hello")
      $('.carousel').flickity('next');
    });
  
    $('.prev_btn').click(function() {
      $('.carousel').flickity('previous');
    });
  });
  

