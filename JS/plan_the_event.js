 // Wait until the DOM is fully loaded
 document.addEventListener('DOMContentLoaded', function() {
        
    // Get the "View Options" button by its ID
    var viewOptionsButton = document.getElementById('view-options');
    
    // Add a click event listener to the "View Options" button
    viewOptionsButton.addEventListener('click', function() {
        
        // Get the values of the dropdowns
        var selectedTheme = document.getElementById('pick-your-theme').value;
        var selectedVenue = document.getElementById('pick-your-venue').value;
        var selectedCity = document.getElementById('pick-your-city').value;
        
        // Check if a theme has been selected
        if (!selectedTheme) {
            alert('Please pick your theme');
            return; // Stop execution if theme is not selected
        }
        
        // Check if at least one of the "Pick Your Venue" or "Pick Your City" dropdowns has been selected
        if (!selectedVenue && !selectedCity) {
            alert('Please select a city or a venue');
            return; // Stop execution if neither is selected
        }
        
        // Redirect to another page (using a null link for now)
        window.location.href = 'search results.php';
    });
});