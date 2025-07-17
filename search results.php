<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width", initial-scale="1.0">

        <title>
            List Your Property - search results
        </title>
        <link rel="stylesheet" href="CSS\search_results.css">


    </head>

    <body>
        <header class="header">
            <!--The image on the upper right corner-->
            <div class="Logo">
                <img src="media\Eventescape logo.png" alt="Company Logo">
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

        <div class="result">
            <div class="tinyrec">
                <!-- Inside the red rectangle for search results -->
                <div class="search-result-container">
                    <div class="thumbnail">
                        <img src="media\cinnamon.jpg" class="thumbnail" alt="image1">
                    </div>
                    <div class="details">
                        <div class="location-name">Cinnamon Grand - Colombo</div>
                        <div class="availability">Available: Yes</div>
                    </div>
                    <div class="review-price">
                        <div class="reviews">4.5 ★</div>
                        <div class="price">Starting at 50000 LKR</div>
                    </div>
                </div>


                <div class="search-result-container">
                    <div class="thumbnail">
                        <img src="media\taj.jpg" class="thumbnail" alt="image2">
                    </div>
                    <div class="details">
                        <div class="location-name">Taj Samudra - Colombo</div>
                        <div class="availability">Available: No</div>
                    </div>
                    <div class="review-price">
                        <div class="reviews">4.0 ★</div>
                        <div class="price">Starting at 35000 LKR</div>
                    </div>
                </div>
            </div>
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
    </body>
</html>