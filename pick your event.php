<!DOCTYPE html>
<html>
    <head>
        <title>
            Pick Your Event
        </title>
        <link rel="stylesheet" href="CSS\pick_your_event_1.css">
    </head>

    <body>

        <!--Background video-->
        <div class="background-video">
            <video autoplay muted loop id="bgVideo">
                <source src="media\y2mate.com - Royalty Free Video  Fireworks HD_1080p.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>


        

      <div class="container">
        <header class="header">
            <!--The image on the upper right corner-->
            <div class="Logo">
            <img src="media\invert logo.jpg" alt="Company Logo"> 
            </div>
            
            <!--The navigation items on the left corner-->
            <div>
                <ul class="header-nav">
                    <!-- Individual list items represent navigation links -->
                    <!-- "#" is a placeholder for the actual URL link -->
                    <li><a href="http://localhost/iwt/home1.php">Home</a></li>
                <li><a href="http://localhost/iwt/Aboutus.php">About Us</a></li>
                <li><a href="http://localhost/iwt/New%20listing.php">List Your Property</a></li>
                <li><a href="http://localhost/iwt/services.php">More Services</a></li>
                <li><a href="http://localhost/iwt/booking.php">Confirm Booking</a></li>
                <li><a href="http://localhost/iwt/index.php">Contact Us</a></li>
                </ul>
            </div>
        </header>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br>

        <!--Pick your event-->

        <div class="result-pye">

            <label class="pye-title"><h1>Pick Your Event</h1></label>

            <div class="pick-your-event">
                            
                <select id="pick-your-event">
                <option value="" disabled selected> Pick Your Event </option>
                <option value="Wedding">Wedding</option>
                <option value="Birthday Party">Birthday Party</option>
                <option value="Corporate Meeting">Corporate Meeting</option>
                <option value="Concert">Concert</option>
                <option value="Conference">Conference</option>
                <option value="Sports Event">Sports Event</option>
                <option value="Festival">Festival</option>
                <option value="Graduation Ceremony">Graduation Ceremony</option>
                <option value="Charity Gala">Charity Gala</option>   
                <option value="Trade Show">Trade Show</option>
                <option value="Exhibition">Exhibition</option>
            </select>

        </div>

        <script src="JS\pick_your_event.js"></script>

    </div>


    <footer>
        <!--Contanct information-->
        <div class="contacts">
            <!--Section Heading-->
            <p><h2>Contact Information</h2></p>
            <!--Section details-->
            <p>📞 011-2814518</p>
            <p>🏠 25/3, Eventescape, Colombo 05</p>
            <p>✉ eventescape@gmail.com</p>
        </div>

        <!--Terms and conditions and privacy policy-->
        <div class="footer-links">
        <a href ="http://localhost/iwt/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/iwt/privacypolicy.php">  Privacy Policy </a>
        </div>
    </footer>

      </div>
    </body>
</html>