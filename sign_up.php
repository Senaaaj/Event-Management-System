<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection.php';  // Include the database connection

//check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['txt'];  // Get the name from the form
    $email = $_POST['email']; // Get the email from the form
    $password = $_POST['paswd'];  // Get the password from the form
    $confirm_password = $_POST['confirm_password'];  // Get the confirm password from the form

    // Check if the passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match. Please try again."; // Output error if passwords don't match
    } else {
        // Hash the password for security(Encryption)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $query = "INSERT INTO login (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        // Execute the query and check if it was successful
        if ($stmt->execute()) {
            echo "User created successfully.";  // Confirmation message if user is created
            header("Location: home1.php");  // Redirect to profile page after registration
            exit();  // Stop further script execution after redirect
        } else {
            echo "Error: " . $stmt->error;  // Error message
        }
    }
} else {
    echo "Invalid request method.";     // Error message if the request is not POST
}
?>