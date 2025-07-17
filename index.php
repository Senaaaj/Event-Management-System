<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,intial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="header & footer.css">
        <!--Link to external Javascript file-->
        <script src="script.js" defer></script>
        <!--Fontawesome icon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            const conImage = document.querySelector('.con-image');
            conImage.style.opacity = '1'; // Change opacity to 1 to fade in
            });
        </script>
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
        <section class="contact-section">
            <div class="contact-bg">
                <h3>Get in Touch with Us</h3>
                <h2>Contact Us</h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p id="text1">Want to get in touch ? We'd love to hear from you
                    Here's how you can reach us.</p>
            </div>

            <div class="body">
                <div class="info">
                    <div>
                        <span><i class="fas fa-mobile-alt"></i></span>
                        <span>Phone No.</span>
                        <span class="text">+94 74 015 7195</span>
                    </div>
                    <div>
                        <span><i class="fas fa-envelope-open"></i></span>
                        <span>E-mail</span>
                        <span class="text">eventescape@gmail.com</span>
                    </div>
                    <div>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span>Adress</span>
                        <span class="text">25/3, Eventescape, Colombo 05, Sri Lanka</span>
                    </div>
                    <div>
                        <span><i class="fas fa-clock"></i></span>
                        <span>Opening Hours</span>
                        <span class="text">Monday-Saturday(9.00 AM to 5.00PM)</span>
                    </div>
                </div>

                <!--form-->
                <div class="contact-wrapper">
                    <div class="contact-form">
                        <form method="post" action="insert.php">
                    
                            <div>
                                <input type="text" class="form-control" placeholder="Customer ID" disabled> <br>
                                <input type="text" name="fname" class="form-control" placeholder="First Name">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name">
                            </div>
                            <div>
                                <input type="email"  name="email" class="form-control" placeholder="E-mail">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            
                            </div>
                            <div>
                                <textarea rows="5"cols="50" name= "msg" placeholder="Message" id="msgbox" class="form-control"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="send-btn" value="send message" onclick="return validateForm()">
                                <input type="submit" class="send-btn" formaction="update.php" value="Update" onclick="showAlert()">
                            </div>
                        </form>
                    </div>
                    <!--image section-->
                    <div class="con-image">
                        <img src="images/contact.jpg" alt="">
                    </divs>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="custom-box">
                <p> Do you want to delete a feedback ?</p>
                <form action="deleteContacts.php" method="POST">
                <input type="submit" class="send-btn" value="yes">
            </div>
            <!--Map-->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63376.549479604306!2d79.83127415976274!3d6.886489958100892!
                2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd260b4fa11%3A0xf580e12fb12d21f3!2sColombo%2005%2C%20Colombo!5e0!3m2!
                1sen!2slk!4v1726755378477!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </section>

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