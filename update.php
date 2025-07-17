<?php

require 'c_config.php';

    
    $customerfName=$_POST["fname"];
    $customerlName=$_POST["lname"];
    $cusEmail=$_POST["email"];
    $cusPhone=$_POST["phone"];
    $cusMessage=$_POST["msg"];

    if(empty($customerfName)||empty($customerlName)||empty($cusEmail)||empty($cusPhone)||empty($cusMessage))
    {
        echo "All Required";
    }
    else
    {
        $sql="UPDATE contactdetails1 set firstName='$customerfName',lastName='$customerlName',phone='$cusPhone', msg='$cusMessage' WHERE  email='$cusEmail' ";
        if($con->query($sql)){
            echo "Updated";
        }else{
            echo "Not Updated";
        }
    }
?>