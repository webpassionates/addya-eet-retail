
// $(document).ready(function() {
//     $('.carousel').flickity({
//         wrapAround: true, 
//         pageDots: false,
//         // draggable: false, 
//         contain: true,
//         autoPlay: true, 
//         prevNextButtons: false 
//       });
  
//     // Add event listeners for previous and next buttons
//     $('.next-btn').click(function() {
//       $('.carousel').flickity('next');
//     });
  
//     $('.prev-btn').click(function() {
//       $('.carousel').flickity('previous');
//     });
//   });
  

$(document).ready(function() {
  var $carousel = $('.carousel').flickity({
      wrapAround: true, 
      pageDots: false,
      contain: true,
    //   autoPlay: true,
      prevNextButtons: false 
  });

  // Add event listeners for previous and next buttons
  $('.next-btn').click(function() {
      $carousel.flickity('next');
  });

  $('.prev-btn').click(function() {
      $carousel.flickity('previous');
  });

  // Listen for Flickity events
  $carousel.on('select.flickity', function(event, index) {
      var flkty = $carousel.data('flickity');
      if (!flkty.options.wrapAround && index === flkty.cells.length - 1) {
          // If wrapAround is not enabled and last slide is reached, go to first slide
          $carousel.flickity('select', 0);
      }
  });
});
