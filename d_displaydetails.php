<?php
// Include the database connection file
include 'd_connection.php';

// Fetch properties from the database
$sql = "SELECT id, property_name, base_price, venue_type, manager_name FROM properties";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        .action-btn {
            padding: 5px 10px;
            margin-right: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        .btn-add {
            background-color: #4CAF50;
            color: white;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }

        .btn-update {
            background-color: #2196F3;
            color: white;
        }

        .btn-add:hover {
            background-color: #45a049;
        }

        .btn-delete:hover {
            background-color: #e53935;
        }

        .btn-update:hover {
            background-color: #1e88e5;
        }

        .container {
            padding: 20px;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .table-header h2 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-header">
            <h2>Property List</h2>
            <button class="action-btn btn-add" onclick="window.location.href='New listing.php';">Add Property</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Property Name</th>
                    <th>Base Price</th>
                    <th>Venue Type</th>
                    <th>Manager's Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['property_name'] . "</td>";
                        echo "<td>$" . number_format($row['base_price'], 2) . "</td>";
                        echo "<td>" . $row['venue_type'] . "</td>";
                        echo "<td>" . $row['manager_name'] . "</td>";
                        echo "<td>";
                        echo "<button class='action-btn btn-update' onclick=\"window.location.href='d_update.php?id=" . $row['id'] . "'\">Update</button>";
                        echo "<button class='action-btn btn-delete' onclick=\"window.location.href='d_delete.php?id=" . $row['id'] . "'\">Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No properties found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
