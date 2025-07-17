<?php
// Include the database connection file
include 'd_connection.php';

// Check if the property ID is set in the URL
if (isset($_GET['id'])) {
    $property_id = intval($_GET['id']);

    // Fetch the property details from the database based on the ID
    $sql = "SELECT * FROM properties WHERE id = $property_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Get the property data
        $property = $result->fetch_assoc();
    } else {
        echo "Property not found!";
        exit;
    }
} else {
    echo "Invalid property ID!";
    exit;
}

// Check if the form has been submitted to update the property
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form inputs
    $property_name = $conn->real_escape_string($_POST['property_name']);
    $property_address = $conn->real_escape_string($_POST['property_address']);
    $venue_type = $conn->real_escape_string($_POST['venue_type']);
    $capacity = $conn->real_escape_string($_POST['capacity']);
    $base_price = $conn->real_escape_string($_POST['base_price']);
    $comments = $conn->real_escape_string($_POST['comments']);
    $manager_name = $conn->real_escape_string($_POST['manager_name']);
    $manager_address = $conn->real_escape_string($_POST['manager_address']);
    $nic = $conn->real_escape_string($_POST['nic']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    // Update the property details in the database
    $update_sql = "UPDATE properties SET 
        property_name = '$property_name',
        address = '$property_address',
        venue_type = '$venue_type',
        capacity = '$capacity',
        base_price = '$base_price',
        comments = '$comments',
        manager_name = '$manager_name',
        manager_address = '$manager_address',
        nic = '$nic',
        contact_number = '$contact_number',
        email = '$email',
        password = '$password'
        WHERE id = $property_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Property updated successfully!";
        header("Location: d_displaydetails.php"); // Redirect to the property list
        exit;
    } else {
        echo "Error updating property: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Property</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="new listing.css">
    </head>
    <body>
        <header class="header">
            <div class="Logo">
                <img src="Eventescape logo.png" alt="Company Logo">
            </div>
            <div>
                <ul class="header-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Confirm Booking</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </header>

        <div class="listing" id="listForm">
            <div class="container">
                <h2>Update Property</h2>

                <!-- Form action to submit updated data -->
                <form action="" method="POST">
                    <!-- Property Information Section -->
                    <div class="form first">
                        <div class="Property info">
                            <span class="title">Property Information</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Name of the property</label>
                                    <input type="text" name="property_name" value="<?php echo $property['property_name']; ?>" required>
                                </div>

                                <div class="input-field">
                                    <label>Address</label>
                                    <input type="text" name="property_address" value="<?php echo $property['address']; ?>" required>
                                </div>

                                <div class="input-field">
                                    <label>Venue Type</label>
                                    <input type="text" name="venue_type" value="<?php echo $property['venue_type']; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="fields">
                            <div class="input-field">
                                <label>Capacity</label>
                                <input type="number" name="capacity" value="<?php echo $property['capacity']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>Base Price</label>
                                <input type="number" name="base_price" value="<?php echo $property['base_price']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>Additional Comments</label>
                                <input type="text" name="comments" value="<?php echo $property['comments']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Manager's Information Section -->
                    <div class="owner info">
                        <span class="title">Manager's Information</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Name</label>
                                <input type="text" name="manager_name" value="<?php echo $property['manager_name']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>Address</label>
                                <input type="text" name="manager_address" value="<?php echo $property['manager_address']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>NIC</label>
                                <input type="text" name="nic" value="<?php echo $property['nic']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>Contact Number</label>
                                <input type="text" name="contact_number" value="<?php echo $property['contact_number']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $property['email']; ?>" required>
                            </div>

                            <div class="input-field">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter new password" required>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="buttons">
                        <button type="submit" class="submitBtn" id="submit">
                            <span class="btnTxt">Update &rarr;</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <div class="contacts">
                <h2>Contact Information</h2>
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>
            <div class="footer-links">
                <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
            </div>
        </footer>

        <script src="JS/New_listing.js"></script>
    </body>
</html>
