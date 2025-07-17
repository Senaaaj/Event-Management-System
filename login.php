<?php
// Error Report
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();  // Start session to track logged-in user
include 'connection.php';  // Include the database connection

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get email and password from the form (matching 'name' attributes in the form)
    $email = $_POST['email'];
    $password = $_POST['paswd'];  // This matches the 'name' attribute in the form

    // Fetch the user with the provided email
    $query = "SELECT * FROM login WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the provided email exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Fetch user data
        
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // If the password is correct, set session variables and redirect
            $_SESSION['user_id'] = $user['userID'];  // Store user ID in session
            $_SESSION['email'] = $user['email'];    // Store user email in session
			header("Location:home1.php");   // Redirect to home page after successful login
            echo "success";  // Send success response for AJAX
        } else {
            echo "invalid";  // Invalid password
        }
    } else {
        echo "invalid";  // No account found with that email
    }
}
?>