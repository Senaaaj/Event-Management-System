<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewpoint" content="width=device-width,intial-scale=1">       
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="header & footer.css">
        
        <!--Boxicon font CSS-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <header class="header">
            <!--The image on the upper right corner-->
            <div class="Logo">
                <img src="images/whitelogo.png" alt="Company Logo">
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

         <!--background-->
            <div class="services-bg">
                <h2>Our services</h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p class="text">Make Your Dreams Unforgettable !</p>
                <a href="http://localhost/iwt/moreservice.php"><input type="submit" class="send-btn" value="Book Now"></a>   
            </div>

            <div class="card-container">
                <div class="card">
                    <img src="images/product.jpg">
                    <div class="card-container">
                        <h1>Event Production</h1>
                        <p>At EventScape, we specialize in full-scale event production, ensuring every aspect of your event is executed seamlessly. 
                            Whether it's a corporate gathering, wedding, or festival, our event production services cover everything from logistics, 
                            talent coordination, and audiovisual support to venue management and more.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/lighting.jpg">
                    <div class="card-container">
                        <h1>Stage Lighting</h1>
                        <p>Our stage lighting services create the perfect ambiance for your event. 
                             Using state-of-the-art equipment, we ensure that every beam of light complements the event's theme, transforming 
                             the atmosphere with stunning effects.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/sounds.jpg">
                    <div class="card-container">
                        <h1>Sound Systems</h1>
                        <p>The sound quality at your event is key to keeping your audience engaged. We offer high-quality sound systems .Our sound engineers will set up, test, and manage the equipment to provide experience for your guests, whether 
                            it's for speeches, live music, or DJ sets.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/furniture.jpg">
                    <div class="card-container">
                        <h1>Furniture Rentals</h1>
                        <p> Our furniture rental services add style and comfort to any event setting. Choose from a variety of modern, traditional, or unique furniture options that 
                            suit your event's theme. 
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/decos.jpg">
                    <div class="card-container">
                        <h1>Party Deco</h1>
                        <p>Turn your event space into a visual 
                            masterpiece with our creative party décor services. Our team of designers works closely with you to create custom décor solutions that reflect your style
                             and theme.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img src="images/consulting.jpg">
                    <div class="card-container">
                        <h1>Consulting and Planning</h1>
                        <p>We offer consulting and planning services to ensure your event is executed flawlessly from start to finish. 
                            Our experienced planners guide you through the process.
                        </p>
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