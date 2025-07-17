
<!DOCTYPE html>
<html>
    <head>
        <title>Booking page</title>
        <link rel="stylesheet" href="booking.css">
        <script src="booking.js"></script>
    </head>
    <body>
    <header class="header">
            <div class="Logo">
                <img src="Images/blacklogo.png" alt="Company Logo">
            </div>
            <div>
            <div>
            <ul class="header-nav">
                <li><a href="http://localhost/iwt/home1.php">Home</a></li>
                <li><a href="http://localhost/iwt/Aboutus.php">About Us</a></li>
                <li><a href="http://localhost/iwt/New%20listing.php">List Your Property</a></li>
                <li><a href="http://localhost/iwt/services.php">More Services</a></li>
                <li><a href="http://localhost/iwt/booking.php">Confirm Booking</a></li>
                <li><a href="http://localhost/iwt/index.php">Contact Us</a></li>
            </ul>
            </div>
        </header>
        <h1 style="text-align: center;">Escape to Comfort & Luxury</h1>
        <h3>Reserve your stay for unforgettable special events and create memories that last a lifetime</h3>
        <div>
            <section class="content">
                <form method="post" action="booking_insert.php" onsubmit="return validateBookingForm()">
                    <div class="form-group">
                        <label for="check-in"><span class="highlight">Check-in Date:</span></label>
                        <input type="date" id="check-in" name="check-in" required>
                        </div>

                        <div class="form-group">
                        <label for="check-out"><span class="highlight">Check-out Date:</span></label>
                        <input type="date" id="check-out" name="check-out" required>
                    </div>
                    <div class="form-group"> 
                        <label for="guests"><span class="highlight">Number of guests</span></label>
                        <input type="number" id="guests" name="guests"   placeholder="Number of guests" required>
                    </div>
                    <div>
                    <label for="ballroom-type" name="Type"><span class="highlight">Ballroom Type</span></label>
                    <br>
                    <img src="images\LOTUS.jpg" width="250" height="200" alt="Ballroom Picture">
                    <img src="images\Tulip.jpg" width="250" height="200" alt="Ballroom Picture">
                    <img src="images\ROSE.jpg" width="200" height="250" alt="Ballroom Picture">
                    <br> 
                    <br>
                    <select id="ballroom-type" name="Type">
                        <option value="">Select Type</option>
                        <option value="ballroom-1">LOTUS</option>
                        <option value="ballroom-2">TULIP</option>
                        <option value="ballroom-3">ROSE</option>
                    </select>
                    </div>
                </section>
                <section>
                </div>
                 <div class="right-form">
                    <h2><span class="highlight_h">Guest Information</span></h2>

                    <label for="name"><span class="highlight">Name</span></label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>

                    <label for="Id"><span class="highlight">ID</span></label>
                    <input type="number" name="CID"  disabled>

                    <label for="email"><span class="highlight">Email</span></label>
                    <input type="email" id="email"  name="email" placeholder="email@example.com" required>

                    <label for="phone"><span class="highlight">Phone Number</span></label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

                    <label for="special-request"><span class="highlight">Special Request</span></label>
                    <textarea name="special-request" rows="4" placeholder="Any special requests"></textarea>
                    <br>
                    
                    <h2><span class="highlight_h">Payment</span></h2>

                    <label for="credit-card"><span class="highlight">Credit Card Number</span></label>
                    <input type="text" name="credit-card" placeholder="Enter your credit card number" Required>

                    <label for="expiration"><span class="highlight">Expiration Date</span></label>
                    <input type="month" name="expiration" required>

                    <label for="security-code"><span class="highlight">Security Code</span></label>
                    <input type="password" name="security-code" placeholder="CVV" Required>
                    <br>
                    <input type="submit"id="submit_btn">
                    <input type="reset" id="reset_btn">
                    </form>
                </div>
                </form>
            </section>
            <section class="box">
             <div class="form">
                <p><span class="highlight">Do You Want to Update Or Delete Form</span></p>
                   <div class="sidebyside">
                    <div class="inputbox">
                    <button id="update-btn" onclick="goToUpdatePage()">UPDATE</button>

                    <script>
            // Function to redirect to update page with email
            function goToUpdatePage() {
                var email = document.getElementById("email").value;  // Get the email from input field
                if (email) {
                    var url = 'booking_update.php?email=' + encodeURIComponent(email);  // Encode the email in the URL
                    window.location.href = url;  // Redirect to the update page
                } else {
                    alert("Please enter a valid email address!");  // Alert if email is not provided
                }
            }

            function gopage(url) {
                window.location.href = url;
            }
        </script>          </div>
            <div class="inputbox">
                <button id="delete-btn" onclick="gopage('booking_delete.php')">DELETE</button>
            </div>
        </div>
    </div>
</section>

            <footer>
            <div class="contacts">
                <p><h2>Contact Information</h2></p>
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>
            <div class="footer-links">
            <a href ="http://localhost/iwt/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/iwt/privacypolicy.php">  Privacy Policy </a>
            </div>
        </footer>
    </body>
</html>