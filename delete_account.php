<?php
session_start();
include 'connection.php';  // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user's password from the database based on the provided email
    $query = "SELECT userID, password FROM login WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the provided password with the stored hashed password
        if (password_verify($password, $user['password'])) {
            // Password is correct, proceed to delete the account
            $delete_query = "DELETE FROM login WHERE userID = ?";
            $delete_stmt = $conn->prepare($delete_query);
            $delete_stmt->bind_param('i', $user['userID']);

            if ($delete_stmt->execute()) {
                // Log out the user after deletion
                session_destroy();
                echo "<script>alert('Account deleted successfully.'); window.location.href = 'loginForm.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error deleting account.');</script>";
            }
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('User not found.');</script>";
    }
}
?>