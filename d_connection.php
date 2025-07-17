<?php

    $host='localhost';
    $user='root';
    $password='';
    $db='listing';

    $conn=mysqli_connect($host,$user,$password,$db);

    if($conn)
    {
       // echo"Connection Ok";
    }
    else
    {
        echo"Connection Error";
    }


?>