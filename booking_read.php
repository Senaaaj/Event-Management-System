<?php

require 'booking_config.php';

$sql = "SELECT check_in,check_out,guests,type,name,ID,email,phone,special_request FROM booking";

$result = $con->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";
    echo  "<tr><td>check_in</td><td>check_out</td><td>guests</td><td>type</td><td>name</td><td>ID</td><td>email</td><td>phone</td><td>special_request</td></tr> ";
    while($row = $result->fetch_assoc())
    {
        echo "<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>";
        echo "<tr>";
        echo  "<td>".$row["check_in"]."</td>"."<td>".$row["check_out"]."</td>"."<td>".$row["guests"]."</td>"."<td>".$row["type"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["ID"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["phone"]."</td>"."<td>" .$row["special_request"]."</td>";
        echo"</tr>";
    }
    echo "</table>";
}
else
{
    echo"No Results";
}


$con->close();

?>