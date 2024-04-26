

// FOr NAvbar DropDown
// j querry 

$(document).ready(function() {
    var dropdownToggle = $('.dropdown-toggle');
    var dropdownMenu = $('.dropdown-menu');

    if (dropdownToggle.length && dropdownMenu.length) {
        dropdownToggle.on('click', function() {
            // console.log('Dropdown toggle clicked');
            dropdownMenu.toggleClass('show');
            $('.arrow').toggleClass('rotate');
            // console.log('Dropdown menu toggled:', dropdownMenu.hasClass('show'));
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(e) {
            if (!dropdownToggle.is(e.target) && dropdownToggle.has(e.target).length === 0) {
                // console.log('Clicked outside dropdown toggle');
                dropdownMenu.removeClass('show');
                $('.arrow').removeClass('rotate');
                // console.log('Dropdown menu closed');
            }
        });
    } else {
        console.error('Dropdown error');
    }
});

// HEader imaeg   chaneg  into 5sec

$(document).ready(function() {
    setTimeout(function() {
      $('.background').addClass('second-image'); // Add class to transition to the second image
    }, 5000); // 5000 milliseconds = 5 seconds
  });

// $(document).ready(function() {
//     // Scale up the background image
//     $('.background').addClass('scale-up');
  
//     // After 5 seconds, switch to the second image
//     setTimeout(function() {
//       $('.background').removeClass('scale-up'); // Remove scale-up class
//       $('.background').addClass('fade-in'); // Apply fade-in effect
//       $('.background').addClass('second-image'); // Switch to the second image
//     }, 5000);
//   });
  


// for the  button silder js explore offer of the  Button  Slider

$(document).ready(function(){
    $('.slider').slick({
      arrows: false,
      dots: false,
      infinite: true,
      speed: 500,
      fade: false,
      cssEase: 'linear',
    });

    $('.prev').click(function(){
      $('.slider').slick('slickPrev');
    });

    $('.next').click(function(){
      $('.slider').slick('slickNext');
    });
  });