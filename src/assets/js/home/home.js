$(document).ready(function() {
    // jQuery code here
    // alert("Hello Home page");
  });

  // document.addEventListener('DOMContentLoaded', function() {
  //   const dropdowns = document.querySelectorAll('.dropdown');
  //   console.log(dropdowns,"akash");
    
  //   dropdowns.forEach(dropdown => {
  //     const link = dropdown.querySelector('a');
  //     const menu = dropdown.querySelector('.dropdown-menu');
      
  //     link.addEventListener('click', function(event) {
  //       event.preventDefault();
  //       menu.classList.toggle('open');
  //     });
  //   });
  // });
  

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
