<?php

// Include the connection file
include 'd_connection.php';


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $property_name = $conn->real_escape_string($_POST['property_name']);
    $address = $conn->real_escape_string($_POST['address']);
    $venue_type = $conn->real_escape_string($_POST['venue_type']);
    $capacity = $conn->real_escape_string($_POST['capacity']);
    $base_price = $conn->real_escape_string($_POST['base_price']);
    $comments = $conn->real_escape_string($_POST['comments']);
    
    // Manager's information
    $manager_name = $conn->real_escape_string($_POST['manager_name']);
    $manager_address = $conn->real_escape_string($_POST['manager_address']);
    $nic = $conn->real_escape_string($_POST['nic']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt the password

    // SQL query to insert data
    $sql = "INSERT INTO properties (property_name, address, venue_type, capacity, base_price, comments, manager_name, manager_address, nic, contact_number, email, password)
            VALUES ('$property_name', '$address', '$venue_type', '$capacity', '$base_price', '$comments', '$manager_name', '$manager_address', '$nic', '$contact_number', '$email', '$password')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        //echo "New property listed successfully!";
        header("Location:d_displaydetails.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
