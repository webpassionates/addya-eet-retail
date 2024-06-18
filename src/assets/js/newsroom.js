function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("active");
}

document.addEventListener('DOMContentLoaded', function () {
    //document.querySelector('.tab button.active').trigger('click');
});



// Our Location Page swanimation code 

$(document).ready(function () {
    $('.Loaction-info-div').on('click', function () {
        console.log($(this).data('mapurl'));
        var mapurl = $(this).data('mapurl');
        $('.Loaction-info-div').removeClass('active');
        $(this).addClass('active');
        $('.iframe_location').attr('src', mapurl);
    });
});
