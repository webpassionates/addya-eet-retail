function changeTab(tabName) {
    var tabContents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].style.transition = "opacity 0.3s ease, transform 0.3s ease";
        tabContents[i].classList.remove("active");
        tabContents[i].style.opacity = 0;
        tabContents[i].style.transform = "scale(0.8)";
    }
    var tabs = document.getElementsByClassName("tab");
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove("active");
    }
    // Show the content of the selected tab and mark it as active
    var selectedTabContent = document.getElementById(tabName + "Content");
    selectedTabContent.classList.add("active");
    selectedTabContent.style.opacity = 1;
    selectedTabContent.style.transform = "scale(1)"; // Set scale to 1 for the active tab
    document.getElementById(tabName + "Tab").classList.add("active");
    // Hide all inner-para text
    var innerParas = document.querySelectorAll('.inner-para');
    innerParas.forEach(para => {
        para.style.display = 'none';
    });
    // Show inner-para text only for the active tab with transition effect
    var activeTabInnerPara = document.querySelector('#' + tabName + 'Tab .inner-para');
    activeTabInnerPara.style.display = 'block';
    setTimeout(function() {
        activeTabInnerPara.style.opacity = 1;
    }, 10); // Add a small delay for the transition effect to work
}
// Function to add click event listeners to all tabs
function addClickEventListenersToTabs() {
    // Get all tabs
    var tabs = document.querySelectorAll('.tab');
    // Add click event listener to each tab
    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            var tabName = this.id.replace("Tab", "");
            changeTab(tabName); // Call changeTab function when a tab is clicked
            clearInterval(autoplayInterval); // Stop autoplay when a tab is clicked
        });
    });
}
// Automatically switch tabs on page load
window.onload = function () {
    // Show inner-para text for the active tab by default
    var activeTab = document.querySelector('.tab.active');
    var activeTabName = activeTab.id.replace("Tab", "");
    var activeTabInnerPara = document.querySelector('#' + activeTabName + 'Tab .inner-para');
    activeTabInnerPara.style.display = 'block';
    // Automatically switch tabs every 3 seconds
    var tabs = ["test1", "test2", "test3"];
    var currentIndex = 0;
    var autoplayInterval = setInterval(function () {
        changeTab(tabs[currentIndex]);
        currentIndex = (currentIndex + 1) % tabs.length;
    }, 3000); // Change tabs every 3 seconds
    // Call function to add click event listeners to all tabs
    addClickEventListenersToTabs();
};