<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="profilestyle.css">
</head>
<body>

    <!-- Fixed Header Section -->
    <header class="header">
        <div class="Logo">
            <img src="whitelogo.png" alt="Company Logo">
        </div>

        <!-- Navigation Menu -->
        <nav>
            <ul class="header-nav">
            <li><a href="http://localhost/iwt/home1.php">Home</a></li>
                <li><a href="http://localhost/iwt/Aboutus.php">About Us</a></li>
                <li><a href="http://localhost/iwt/New%20listing.php">List Your Property</a></li>
                <li><a href="http://localhost/iwt/services.php">More Services</a></li>
                <li><a href="http://localhost/iwt/booking.php">Confirm Booking</a></li>
                <li><a href="http://localhost/iwt/index.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="leftbox">
            <a onclick="tabsSwitch(0)" class="tab active">
                <i class="fa fa-user"></i>
            </a>
            <a onclick="tabsSwitch(1)" class="tab">
                <i class="fa fa-credit-card"></i>
            </a>
            <a onclick="tabsSwitch(2)" class="tab">
                <i class="fa fa-tasks"></i>
            </a>
            <a onclick="tabsSwitch(3)" class="tab">
                <i class="fa fa-cog"></i>
            </a>
        </div>

        <div class="rightbox">
            <div class="profile tabShow">
                <h1>Personal Info</h1>
                <h2>Full Name</h2>
                <input type="text" class="input" value="Sankalpa Fernando">

                <h2>Birthday</h2>
                <input type="text" class="input" value="20 April 2024">

                <h2>Gender</h2>
                <input type="text" class="input" value="Male">

                <h2>Email</h2>
                <input type="text" class="input" value="example@example.com">

                <h2>Contact Number</h2>
                <input type="number" class="input" value="0112345678">

                <h2>Password</h2>
                <input type="password" class="input" value="brightcode">
                <br></br>
                <button class="btn" formaction="deleteform.php">Delete</button>
                <button class="btn">Update</button>
            </div>

            <div class="profile">
                <h1>Payment Info</h1>
                <h2>Payment Method</h2>
                <input type="text" class="input" value="Master Card - 0202 **** **** 7336">

                <h2>Billing Address</h2>
                <input type="text" class="input" value="12/12 Colombo Sri Lanka">

                <h2>Zip Code</h2>
                <input type="text" class="input" value="1010">

                <button class="btn">Update</button>
            </div>

            <div class="profile">
                <h1>Privacy Settings</h1>
                <h2>Manage Email Notifications</h2>
                <p></p>

                <h2>Manage Privacy Settings</h2>
                <p></p>

                <h2>View Terms of Use</h2>
                <p></p>

                <button class="btn">Update</button>
            </div>

            <div class="profile">
                <h1>Account Settings</h1>
                <h2>Manage Email Notifications</h2>
                <p></p>

                <h2>Manage Privacy Settings</h2>
                <p></p>

                <h2>View Terms of Use</h2>
                <p></p>

                <button class="btn">Update</button>
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
            <a href ="#"> Terms & conditions</a><span class="span"></span>   |   <a href="#">  Privacy Policy </a>
        </div>
    </footer>

    <script src="profilescript.js"></script>
</body>
</html>