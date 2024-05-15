// $(document).ready(function() {
//     // jQuery code here
//     // alert("Hello EET");
//   });
//header search input start//
let topHeight = $('.main-menu').outerHeight();
$(".dummy-header").css('height', topHeight);
searchIcon.addEventListener('mouseenter', expandSearchInput);
searchInput.addEventListener('mouseenter', expandSearchInput);
function expandSearchInput() {
    if (!searchInput.classList.contains('expanded')) {
        searchInput.classList.add('expanded');
        speakToUsBtn.style.opacity = '0';
        speakToUsBtn.style.display = 'inline-block';
        glass.style.color = "white";
        // searchInput.style.background = '#858C91';
        // searchInput.style.outline = '2px black solid'
        // searchInput.style.borderRadius = "10px"
        searchInput.focus();
    }
}
searchIcon.addEventListener('mouseleave', collapseSearchInput);
searchInput.addEventListener('mouseleave', collapseSearchInput);
function collapseSearchInput() {
    if (searchInput.classList.contains('expanded')) {
        searchInput.classList.remove('expanded');
        speakToUsBtn.style.display = 'inline-block';
        searchInput.style.background = 'transparent';
        searchInput.style.outline = 'none'
        speakToUsBtn.style.opacity = '1';
        // glass.style.color = "black";
    }
}

//header search input end//

//header dropdown mouse hover start//
function openDropdown() {
    document.getElementById("dropdownMenu").classList.add("show");
}

function closeDropdown() {
    document.getElementById("dropdownMenu").classList.remove("show");
}
//header dropdown mouse hover end//

// Who We Are slider effect start
document.addEventListener('DOMContentLoaded', function() {
    const textElements = document.querySelectorAll('.animated-text');
    
    function showText(index) {
        if (index < textElements.length) {
            setTimeout(function() {
                textElements[index].style.opacity = '1';
                textElements[index].style.transform = 'translateY(0)';
                showText(index + 1);
            }, 1500); // Adjust timing here (in milliseconds)
        }
    }
    
    showText(0);
});
// Who We Are slider effect end