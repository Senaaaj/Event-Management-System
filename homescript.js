document.addEventListener('DOMContentLoaded', () => {
    const scrollContainer = document.querySelector('.services-container');
    const serviceBoxes = Array.from(document.querySelectorAll('.service-box')); // Select all service boxes
    
    // Clone service boxes to create an infinite scrolling illusion
    serviceBoxes.forEach((box) => {
        const clone = box.cloneNode(true);
        scrollContainer.appendChild(clone);
    });

    // Start auto-scrolling continuously
    autoScrollContinuous(scrollContainer);
});

const scrollStep = 1; // Adjust this value to control how fast it scrolls
let scrollInterval;

// Function to start continuous scrolling
function autoScrollContinuous(container) {
    scrollInterval = setInterval(() => {
        container.scrollLeft += scrollStep;

        // Reset scroll position when reaching the end of the original items
        if (container.scrollLeft >= container.scrollWidth / 2) {
            container.scrollLeft = 0; // Reset to the beginning smoothly
        }
    }, 20); // Adjust the time interval for smoothness
}