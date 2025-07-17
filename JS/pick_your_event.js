document.getElementById('pick-your-event').addEventListener('change', function() {
    var event = this.value; 
    if (event) {
        window.location.href = "plan the event.php"; 
    }
});