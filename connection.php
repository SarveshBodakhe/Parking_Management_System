<?php
 
$con = mysqli_connect('localhost','root','','parking');
 
if($con)
{
    echo "";
    
}
else
{
die("connection failed because".mysqli_connect_error());
}
 
?>