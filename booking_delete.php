<!DOCTYPE html>
<html>
    <head>
        <title>Booking page</title>
        <style>
            body.dlt-body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #FFCE8B;

}

.box {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px;
    max-width: 400px;
    width: 100%;
}

input[type="email"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

label {
    font-size: 16px;
    color: #333;
}

input[type="submit"] {
    background-color: #ff6b6b;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #ff4c4c;
}

.box div {
    display: flex;
    flex-direction: column;
}

form {
    margin: 20px 0;
}

.box h2 {
    text-align: center;
    color: #333;
}
        </style>
    </head>
    <body class="dlt-body">
        <div class="box">
            <div>
                <form method="post" action="booking_delete.php">
                    <label for="email">Email</label>
                    <input type="email" id="email"  name="email" placeholder="email@example.com">
                   <input type="submit" id="delete_submit" value="Delete">
            
                </form>
            </div>
        </div>    
    </body>
</html>
<?php
require 'booking_config.php';//give the connection with data base 
$Email="abc@mail.com";
if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $Email = $_POST["email"];
}
$sql="DELETE FROM booking WHERE email='$Email'";
//Alert
if($con ->query($sql))
{
    echo "<script>alert('Deleted.');</script>";
}    
else{
    echo "<script>alert('Not Deleted.');</script>";
}

?>