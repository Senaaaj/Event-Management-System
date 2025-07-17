<?php
    require 'c_config.php';

    $customerfName=$_POST["fname"];
    $customerlName=$_POST["lname"];
    $cusEmail=$_POST["email"];
    $cusPhone=$_POST["phone"];
    $cusMessage=$_POST["msg"];

    $sql="INSERT INTO contactdetails1 VALUES ('','$customerfName','$customerlName','$cusEmail','$cusPhone','$cusMessage')";
    if($con->query($sql))
    {
        echo "Insert Successful";
    }else{
        echo "Error".$con->error;
    }

    $con->close();
?>