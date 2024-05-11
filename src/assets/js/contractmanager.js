$(document).ready(function () {
    $(".key-resp-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: false,
        autoplayTimeout: 8000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    $(".key-benefits-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: true,
        autoplayTimeout: 8000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 1
            }
        }
    });

    $(".key-resp-carousel").on("scroll", function () {
        var scrollTop = $(this).scrollTop();
        $(".key-benefits-carousel").scrollTop(scrollTop);
    });
});

