<?php
// Include the database connection file
include 'd_connection.php';

// Check if the property ID is set in the URL
if (isset($_GET['id'])) {
    $property_id = intval($_GET['id']); // Get the property ID and ensure it's an integer

    // Prepare the SQL DELETE statement
    $sql = "DELETE FROM properties WHERE id = $property_id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Property deleted successfully!";
    } else {
        echo "Error deleting property: " . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Redirect to the property listing page after deletion
    header("Location:d_displaydetails.php");
    exit;
} else {
    echo "Invalid property ID!";
    exit;
}
?>
