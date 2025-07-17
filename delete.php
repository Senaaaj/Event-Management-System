<?php
    require 'c_config.php';

    $email=$_POST["email"];

    $sql="DELETE FROM contactdetails1 WHERE email='$email'";

    if($con->query($sql))
    {
        echo "Deleted";
    }
    else
    {
        echo "Not Success";
    }


?>