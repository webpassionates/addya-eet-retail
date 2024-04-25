//  document.addEventListener("DOMContentLoaded", function() {
//     var dropdownToggle = document.querySelector('.dropdown-toggle');
//     var dropdownMenu = document.querySelector('.dropdown-menu');

//     if (dropdownToggle && dropdownMenu) {
//         dropdownToggle.addEventListener('click', function() {
//             console.log('Dropdown toggle clicked');
//             dropdownMenu.classList.toggle('show');
//             document.querySelector('.arrow').classList.toggle('rotate');
//             console.log('Dropdown menu toggled:', dropdownMenu.classList.contains('show'));
//         });

//         // Close dropdown when clicking outside
//         document.addEventListener('click', function(e) {
//             if (!dropdownToggle.contains(e.target)) {
//                 console.log('Clicked outside dropdown toggle');
//                 dropdownMenu.classList.remove('show');
//                 document.querySelector('.arrow').classList.remove('rotate');
//                 console.log('Dropdown menu closed');
//             }
//         });
//     } else {
//         console.error('Dropdown error');
//     }
// });


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




// for the  button silder js

document.addEventListener('DOMContentLoaded', function () {
    var bgOneBtn = document.getElementById('bgOneBtn');
    var bgTwoBtn = document.getElementById('bgTwoBtn');
    var slides = document.querySelectorAll('.slide');

    bgOneBtn.addEventListener('click', function () {
        switchSlide('bgOne');
    });

    bgTwoBtn.addEventListener('click', function () {
        switchSlide('bgTwo');
    });

    var currentIndex = 0;
    var slideInterval = setInterval(autoSwitch, 5000);

    function autoSwitch() {
        switchSlide(currentIndex % 2 === 0 ? 'bgOne' : 'bgTwo');
        currentIndex++;
    }

    function switchSlide(slideName) {
        slides.forEach(function (slide) {
            if (slide.classList.contains(slideName)) {
                slide.style.opacity = '1';
            } else {
                slide.style.opacity = '0';
            }
        });
    }
});


$(document).ready(function(){
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000, // 10 seconds autoplay
        arrows: false,
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        rtl: true, // Right to left slide direction
        adaptiveHeight: true // Automatically adjust height
    });

    // Custom function to adjust slide on button click
    $('#bgOneBtn').click(function(){
        $('.slider').slick('slickGoTo', 0);
    });

    $('#bgTwoBtn').click(function(){
        $('.slider').slick('slickGoTo', 1);
    });
});


function switchSlide(slideName) {
    slides.forEach(function (slide) {
        if (slide.classList.contains(slideName)) {
            slide.style.opacity = '1';
            slide.style.transform = 'translateX(0)'; // Move slide to initial position
        } else {
            slide.style.opacity = '0';
            slide.style.transform = 'translateX(100%)'; // Move slide out of view
        }
    });
}


