<?php
require 'c_config.php';


$sql="SELECT CID, firstname, lastname, email, phone, msg FROM contactdetails1";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["CID"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["msg"]."</td>";
        echo "</tr>";
    }
}
else
{
    echo "No Results";
}

$con->close();
?>