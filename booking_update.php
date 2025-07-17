<?php
require 'booking_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $email = $_POST['email'];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];
    $guests = $_POST['guests'];
    $type = $_POST['Type'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $special_request = $_POST['special-request'];

    //required fields are filled
    if (empty($email) || empty($check_in) || empty($check_out) || empty($guests) || empty($type) || empty($name) || empty($phone)) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        // Update query
        $sql_update = "UPDATE booking SET 
            check_in = '$check_in',
            check_out = '$check_out',
            guests = '$guests',
            type = '$type',
            name = '$name',
            phone = '$phone',
            special_request = '$special_request'
            WHERE email = '$email'";

        if ($con->query($sql_update) === TRUE) {
            echo "<script>alert('Booking updated successfully');</script>";
        } else {
            echo "<script>alert('Error updating booking: " . $con->error . "');</script>";
        }
    }
}
if (isset($_GET['email'])) {
    $email = urldecode($_GET['email']);  // Decoding the email
    
}
//Booking to pre-fill the form

$sql = "SELECT check_in, check_out, guests, type, name, email, phone, special_request FROM booking  WHERE email = '$email'";
$result = $con->query($sql);

$check_in = $check_out = $guests = $type = $name = $email = $phone = $special_request = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $check_in = $row['check_in'];
    $check_out = $row['check_out'];
    $guests = $row['guests'];
    $type = $row['type'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $special_request = $row['special_request'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Booking page</title>
        <link rel="stylesheet" href="booking.css">
    </head>
    <body>
        <header class="header">
            <div class="Logo">
                <img src="Images/company logo.jpg" alt="Company Logo">
            </div>
            <div>
                <ul class="header-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="booking.php">Confirm Booking</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </header>

        <h1 style="text-align: center;">Escape to Comfort & Luxury</h1>
        <h3>Reserve your stay for unforgettable special events and create memories that last a lifetime</h3>

        <div>
            <section class="content">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="email@example.com" value="<?php echo htmlspecialchars($email); ?>" required>

                        <label for="check-in">Check-in Date:</label>
                        <input type="date" id="check-in" name="check-in" value="<?php echo htmlspecialchars($check_in); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="check-out">Check-out Date:</label>
                        <input type="date" id="check-out" name="check-out" value="<?php echo htmlspecialchars($check_out); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="guests">Number of guests</label>
                        <input type="number" id="guests" name="guests" placeholder="Number of guests" value="<?php echo htmlspecialchars($guests); ?>" required>
                    </div>

                    <div>
                        <label for="ballroom-type">Ballroom Type</label>
                        <br>
                        <img src="images/LOTUS.jpg" width="250" height="200" alt="Ballroom Picture">
                        <img src="images/Tulip.jpg" width="250" height="200" alt="Ballroom Picture">
                        <img src="images/ROSE.jpg" width="200" height="250" alt="Ballroom Picture">
                        <br><br>

                        <select id="ballroom-type" name="Type" required>
                            <option value="">Select Type</option>
                            <option value="LOTUS" <?php if($type == 'LOTUS') echo 'selected'; ?>>LOTUS</option>
                            <option value="TULIP" <?php if($type == 'TULIP') echo 'selected'; ?>>TULIP</option>
                            <option value="ROSE" <?php if($type == 'ROSE') echo 'selected'; ?>>ROSE</option>
                        </select>
                    </div>

                    <section class="right-form">
                        <h2>Guest Information</h2>

                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" required>

                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" value="<?php echo htmlspecialchars($phone); ?>" required>

                        <label for="special-request">Special Request</label>
                        <textarea name="special-request" rows="4" placeholder="Any special requests"><?php echo htmlspecialchars($special_request); ?></textarea>
                        <br>

                        <input type="submit" value="Update">
                    </section>
                </form>
            </section>
        </div>

        <footer>
            <div class="contacts">
                <h2>Contact Information</h2>
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>

            <div class="footer-links">
                <a href="#">Terms & conditions</a> | <a href="#">Privacy Policy</a>
            </div>
        </footer>
    </body>
</html>
