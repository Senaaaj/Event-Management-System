<?php
//Include database connection
require 'booking_config.php';

//get the data using post method
$checkIn = $_POST["check-in"];
$checkOut = $_POST["check-out"];
$NumOfGuests = $_POST["guests"];
$TYPE = $_POST["Type"];
$Name = $_POST["name"];
$Email = $_POST["email"];
$PHONE = $_POST["phone"];
$specialRequest = $_POST["special-request"];
$creditCard = $_POST["credit-card"];
$Exp = $_POST["expiration"];
$sCode = $_POST["security-code"];

//Insert the data to database
$sql = "INSERT INTO booking VALUES ('$checkIn','$checkOut','$NumOfGuests','$TYPE','$Name','','$Email','$PHONE','$specialRequest','$creditCard','$Exp','$sCode')";

//if the quary was sucessull dislay the sucessfull alert
if($con->query($sql))
{
    echo "<script>alert('Sucessfull.');</script>";
}
else{
    echo "Error".$con->error;
}

$con->close();//close the data base connection

?> 