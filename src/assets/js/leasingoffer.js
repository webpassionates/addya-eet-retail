function changeTab(tabName) {
    // Get all elements with class "tabcontent" and hide them
    var tabContents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active"); // Remove active class
        tabContents[i].style.opacity = 0; // Set opacity to 0
    }

    // Get all elements with class "tab" and remove the "active" class
    var tabs = document.getElementsByClassName("tab");
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove("active");
    }

    // Show the content of the selected tab and mark it as active
    var selectedTabContent = document.getElementById(tabName + "Content");
    selectedTabContent.classList.add("active");
    selectedTabContent.style.opacity = 1;
    document.getElementById(tabName + "Tab").classList.add("active");

    // Hide all inner-para text
    var innerParas = document.querySelectorAll('.inner-para');
    innerParas.forEach(para => {
        para.style.display = 'none';
    });

    // Show inner-para text only for the active tab
    var activeTabInnerPara = document.querySelector('#' + tabName + 'Tab .inner-para');
    activeTabInnerPara.style.display = 'block';
}

// Function to automatically switch tabs
function autoSwitchTabs() {
    var tabs = ["test1", "test2", "test3"];
    var currentIndex = 0;

    // Switch tabs every 3 seconds (adjust the interval as needed)
    var intervalId = setInterval(function () {
        changeTab(tabs[currentIndex]);
        currentIndex = (currentIndex + 1) % tabs.length;
    }, 3000); // Change tabs every 3 seconds

    // Stop auto-scrolling when a tab is clicked
    var tabLinks = document.querySelectorAll('.tab');
    tabLinks.forEach(function(tab) {
        tab.addEventListener('click', function() {
            clearInterval(intervalId); // Stop auto-scrolling
            var tabName = this.id.replace("Tab", "");
            changeTab(tabName); // Activate clicked tab
        });
    });
}

// Automatically switch tabs on page load
window.onload = function () {
    autoSwitchTabs();
    // Show inner-para text for the active tab by default
    var activeTab = document.querySelector('.tab.active');
    var activeTabName = activeTab.id.replace("Tab", "");
    var activeTabInnerPara = document.querySelector('#' + activeTabName + 'Tab .inner-para');
    activeTabInnerPara.style.display = 'block';
};