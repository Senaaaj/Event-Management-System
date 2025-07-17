const tabBtn = document.querySelectorAll(".tab");
const tabs = document.querySelectorAll(".profile");

// Function to switch between tabs
function tabsSwitch(panelIndex) {
    // Hide all tabs first
    tabs.forEach(function (node) {
        node.style.display = "none"; // Hide all tab content
    });

    // Display the selected tab content
    tabs[panelIndex].style.display = "block";
}

// Initially display the first tab
tabsSwitch(0);

// Add event listeners to tab buttons
$(".tab").click(function() {
    const index = $(this).index(); // Get the index of the clicked tab

    // Add 'active' class to the clicked tab and remove it from siblings
    $(this).addClass("active").siblings().removeClass("active");

    // Switch the content of the tabs
    tabsSwitch(index);
});