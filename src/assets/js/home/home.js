 document.addEventListener("DOMContentLoaded", function() {
    var dropdownToggle = document.querySelector('.dropdown-toggle');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    if (dropdownToggle && dropdownMenu) {
        dropdownToggle.addEventListener('click', function() {
            console.log('Dropdown toggle clicked');
            dropdownMenu.classList.toggle('show');
            document.querySelector('.arrow').classList.toggle('rotate');
            console.log('Dropdown menu toggled:', dropdownMenu.classList.contains('show'));
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdownToggle.contains(e.target)) {
                console.log('Clicked outside dropdown toggle');
                dropdownMenu.classList.remove('show');
                document.querySelector('.arrow').classList.remove('rotate');
                console.log('Dropdown menu closed');
            }
        });
    } else {
        console.error('Dropdown toggle or dropdown menu not found');
    }
});



// for the  button silder js

document.addEventListener('DOMContentLoaded', function () {
    var akashBtn = document.getElementById('akashBtn');
    var buntyBtn = document.getElementById('buntyBtn');
    var slides = document.querySelectorAll('.slide');

    akashBtn.addEventListener('click', function () {
        switchSlide('akash');
    });

    buntyBtn.addEventListener('click', function () {
        switchSlide('bunty');
    });

    var currentIndex = 0;
    var slideInterval = setInterval(autoSwitch, 5000);

    function autoSwitch() {
        switchSlide(currentIndex % 2 === 0 ? 'akash' : 'bunty');
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
