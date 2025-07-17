<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List Your Property</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link to CSS file -->
        <link rel="stylesheet" href="new listing.css">

        <!-- Link to icon library -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>

    <body>

        <header class="header">
            <!-- Company logo in the upper right corner -->
            <div class="Logo">
                <img src="Eventescape logo.png" alt="Company Logo">
            </div>
            
            <!-- Navigation items in the left corner -->
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

        <div class="listing" id="listForm">
            <div class="container">
                <h2>List Your Property</h2>

                <!-- Form action updated to submit data using POST method -->
                <form action="d_insert.php" method="POST">
                    <!-- Property Information Section -->
                    <div class="form first">
                        <div class="Property info">
                            <span class="title">Property Information</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Name of the property</label>
                                    <input type="text" name="property_name" placeholder="Name of the property" required>
                                </div>

                                <div class="input-field">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address" required>
                                </div>

                                <div class="input-field">
                                    <label>Venue Type</label>
                                    <input type="text" name="venue_type" placeholder="Venue Type" required>
                                </div>
                            </div>
                        </div>

                        <div class="fields">
                            <div class="input-field">
                                <label>Capacity</label>
                                <input type="number" name="capacity" placeholder="Capacity" required>
                            </div>

                            <div class="input-field">
                                <label>Base Price</label>
                                <input type="number" name="base_price" placeholder="Base Price" required>
                            </div>

                            <div class="input-field">
                                <label>Additional Comments</label>
                                <input type="text" name="comments" placeholder="Additional Comments">
                            </div>
                        </div>
                    </div>

                    <!-- Manager's Information Section -->
                    <div class="owner info">
                        <span class="title">Manager's Information</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Name</label>
                                <input type="text" name="manager_name" placeholder="Manager's Name" required>
                            </div>

                            <div class="input-field">
                                <label>Address</label>
                                <input type="text" name="manager_address" placeholder="Manager's Address" required>
                            </div>

                            <div class="input-field">
                                <label>NIC</label>
                                <input type="text" name="nic" placeholder="XXXXXXXXXXXX" required>
                            </div>

                            <div class="input-field">
                                <label>Contact Number</label>
                                <input type="text" name="contact_number" placeholder="0XX-XXXXXXX" required>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="someone@example.com" required>
                            </div>

                            <div class="input-field">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="*******" required>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="buttons">
                        <button type="submit" class="submitBtn" id="submit">
                            <span class="btnTxt">Submit &rarr;</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer section -->
        <footer>
            <div class="contacts">
                <h2>Contact Information</h2>
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>

            <!-- Terms and conditions and privacy policy links -->
            <div class="footer-links">
            <a href ="http://localhost/iwt/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/iwt/privacypolicy.php">  Privacy Policy </a>
            </div>
        </footer>

        <!-- Link to external JavaScript file -->
        <script src="JS/New_listing.js"></script>
    </body>
</html>
