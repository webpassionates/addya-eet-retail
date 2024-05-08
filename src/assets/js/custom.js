// $(document).ready(function() {
//     // jQuery code here
//     // alert("Hello EET");
//   });

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
            glass.style.color = "black";
        }
    }