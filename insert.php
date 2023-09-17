<?php

require 'connection.php';

if (isset($_POST['register']))
{
    $name = mysqli_real_escape_string( $con,$_POST['name']);
    $vehicleno = mysqli_real_escape_string( $con,$_POST['vehicleno']);
    $email = mysqli_real_escape_string( $con,$_POST['email']);
    $phonenumber = mysqli_real_escape_string( $con,$_POST['phonenumber']);
    $time = mysqli_real_escape_string( $con,$_POST['time']);
     
    
    $query ="INSERT INTO parking1 (Name,Vehicleno,Email,Phoneno,Time) VALUES('$name','$vehicleno','$email','$phonenumber','$time')";

     $qurey_run = mysqli_query($con,$query);
    if($qurey_run)
    {
        echo ("you are inserted");
        header("Location: index.php");
        exit(0);
    }
    else
    {
        echo "you are not connected";
        header("Location: index.php");
        exit(0);
    }

}
?>