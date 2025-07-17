<!DOCTYPE html>
<html>
    <head>
        <title>
            Plan the event
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
        
        <br><br><br><br><br><br><br><br><br><br>

        <!--Let's plan your perfect event-->

        <!--Any one out of the 3 should give a result. all 3 can be selected but not a necessity-->

        <!--Pick your venue-->
        <!--Only the locations that support the selected event type will be displayed-->
        <label class="plan-event-title" ><h1>Let's Plan Your Perfect Event</h1></label>
        <br><br>

        <div>          
            <select id="pick-your-venue">
            <option value="" disabled selected> Pick Your Venue </option>
            <option value="Cinnamon Lakeside Colombo">Cinnamon Lakeside Colombo</option>
            <option value="Heritance Kandalama">Heritance Kandalama</option>
            <option value="Kingsburry Hotel Colombo">Kingsburry Hotel Colombo</option>
            <option value="Amaya Hills">Amaya Hills</option>
            <option value="Galleface Hotel">Galleface Hotel</option>
            <option value="Anantara Peace Haven Tangalle Resort">Anantara Peace Haven Tangalle Resort</option>
            <option value="Jetwing Blue">Jetwing Blue</option>
            <option value="Uga Jungle Beach">Uga Jungle Beach</option>
            <option value="Cinnamon Wild Yala">Cinnamon Wild Yala</option>
            <option value="Aliya Resort and Spa">Aliya Resort and Spa</option>
        </select>

    </div>

    <!--Pick Your Theme-->
    <!--Only the Themes that support the selected event type will be displayed-->
    <div>          
        <select id="pick-your-theme">
        <option value="" disabled selected> Pick Your Theme </option>
        <option value="Vintage Elegance">Vintage Elegance</option>
        <option value="Beach Bliss">Beach Bliss</option>
        <option value="Garden Romance">Garden Romance</option>
        <option value="Modern Minimalist">Modern Minimalist</option>
        <option value="Fairytale Fantasy">Fairytale Fantasy</option>
        <option value="Elegant Classic">Elegant Classic</option>
        <option value="Glamorous Gold">Glamorous Gold</option>
        <option value="Classic White">Classic White</option>
        <option value="Tropical Paradise">Tropical Paradise</option>
        <option value="Romantic Roses">Romantic Roses</option>
    </select>

    <!--Pick Your City-->
    <div>          
        <select id="pick-your-city">
        <option value="" disabled selected> Pick Your city </option>
        <option value="Colombo">Colombo</option>
        <option value="Kandy">Kandy</option>
        <option value="Galle">Galle</option>
        <option value="Jaffna">Jaffna</option>
        <option value="Negombo">Negombo</option>
        <option value="Trincomalee">Trincomalee</option>
        <option value="Batticaloa">Batticaloa</option>
        <option value="Matara">Matara</option>
        <option value="Anuradhapura">Anuradhapura</option>
        <option value="Ratnapura">Ratnapura</option>
        <option value="Badulla">Badulla</option>
        <option value="Kurunegala">Kurunegala</option>
        <option value="Puttalam">Puttalam</option>
        <option value="Kalutara">Kalutara</option>
        <option value="Hambantota">Hambantota</option>
        <option value="Nuwara Eliya">Nuwara Eliya</option>
        <option value="Polonnaruwa">Polonnaruwa</option>
        <option value="Vavuniya">Vavuniya</option>
        <option value="Mannar">Mannar</option>
        <option value="Kilinochchi">Kilinochchi</option>
    </select>
</div>

<div>
    <!--Back and forward buttons-->

    <!--The buttons-->

    <a href="pick_your_event_1.html" class="previous" id="change-the-event">
        &larr; Change the event</a>
    <!--The weird word shows the  left-pointing double angle quote character («).-->
    
   
    <a href="#" class="next" id="view-options">View Options &rarr;</a>
   <!--The weird word shows the  right-pointing double angle quote character («).-->

   <script src="JS\plan_the_event.js"></script>


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