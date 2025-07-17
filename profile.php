<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'connection.php';  // Include the database connection

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit();
}

$user_id = $_SESSION['user_id'];  // Get the logged-in user's ID

// Fetch user data to display in the form
$query = "SELECT * FROM login WHERE userID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();  // Get the user data

// Process form submission to update user information
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'];  // Update password only if changed

    // Update query without 'contact_number'
    $update_query = "UPDATE login SET fullname = ?, email = ?, password = ? WHERE userID = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param('sssi', $fullname, $email, $password, $user_id);

    if ($update_stmt->execute()) {
        echo "Profile updated successfully.";
        header("Location: profile.php");  // Redirect to profile page after updating
        exit();
    } else {
        echo "Error updating profile: " . $update_stmt->error;
    }
}
?>

<!-- HTML form for the profile page -->
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
            <a onclick="tabsSwitch(0)" class="tab">
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
            <!-- Personal Info Update Form -->
            <div class="profile tabShow">
                <form method="POST" action="profile.php">
                    <h1>Personal Info</h1>

                    <!-- Personal Info Update Form -->
            <form method="POST" action="profile.php">
                <h1>Personal Info</h1>

                <h2>Full Name</h2>
                <input type="text" name="fullname" class="input" value="<?php echo isset($user['fullname']) ? htmlspecialchars($user['fullname']) : ''; ?>" required>

                <h2>Birthday</h2>
                <input type="text" class="input" value="20 April 2024" disabled> <!-- Assuming birthday is not editable -->

                <h2>Gender</h2>
                <input type="text" class="input" value="Male" disabled> <!-- Assuming gender is not editable -->

                <h2>Email</h2>
                <input type="email" name="email" class="input" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>" required>

                <h2>Password (leave blank to keep current)</h2>
                <input type="password" name="password" class="input" placeholder="New password">
                <br></br>
                <button class="btn" formaction="deleteform.php">Delete</button>
                <button class="btn">Update</button>
                </form>
            </div>

            <!-- Other profile tabs -->
            <div class="profile"> <!-- Payment Info -->
                <h1>Payment Info</h1>
                <!-- Payment info fields -->
            </div>

            <div class="profile"> <!-- Privacy Settings -->
                <h1>Privacy Settings</h1>
                <!-- Privacy settings fields -->
            </div>

            <div class="profile"> <!-- Account Settings -->
                <h1>Account Settings</h1>
                <!-- Account settings fields -->
            </div>
        </div>

    </div>

    <script src="profilescript.js"></script>
</body>
</html>