// $(document).ready(function() {
//     // jQuery code here
//     // alert("Hello EET");
//   });
//header search input start// 

//header search input end//

//header dropdown mouse hover start//
function openDropdown() {
    document.getElementById("dropdownMenu").classList.add("show");
}

function closeDropdown() {
    document.getElementById("dropdownMenu").classList.remove("show");
}
//header dropdown mouse hover end//

//mobile collapse toggle start//
document.addEventListener('DOMContentLoaded', function() {
    var navbarToggler = document.querySelector('.navbar-toggler');
    var icon = navbarToggler.querySelector('i');
  
    navbarToggler.addEventListener('click', function() {
      var expanded = navbarToggler.getAttribute('aria-expanded');
      if (expanded === 'false' || expanded === null) {
        // Toggle to xmark icon when navbar is expanded
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      } else {
        // Toggle back to bars icon when navbar is collapsed
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      }
    });
  });
//mobile collapse toggle end//