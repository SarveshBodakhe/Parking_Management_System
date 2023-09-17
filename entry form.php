<?php
include("insert.php");
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="entry.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <div class="container">
    
    
    <div class="title">Registration</div>
    <div class="content">
      <form action="insert.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name<sup>*</sup></span>
            <input type="text" name="name" value ="" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Vehicle no.<sup>*</sup></span>
            <input type="text" name="vehicleno"value ="" placeholder="Enter vehicle number" required>
          </div>
          <div class="input-box">
            <span class="details">Email<sup>*</sup></span>
            <input type="email" name="email"value ="" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number<sup>*</sup></span>
            <input type="text" name="phonenumber" value ="" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Time<sup>*</sup></span>
            <select name="time" required>
              <option selected hidden value="">Select Time</option>
              <option value="1Hr">1 Hr</option>
              <option value="2Hr">2 Hr</option>
              <option value="3Hr">3 Hr</option>
              <option value="4Hr">4 Hr</option>
              <option value="5Hr">5 Hr</option>
              <option value="6Hr">6 Hr</option>
            </select>
            </div>
        </div>
        <h5>*Note:-We charge on hourly basis   <br>charges:- 50₹/hr</h5>
       
        <div class="button">
          <input type="submit" name="register" value="submit">
          
            
            
            
          
        </div>
        
      
      
    </div>
    
  </div>
  </form>
   
  <?php
  $fullname = $_POST['fullname'];
  $vehicleno = $_POST['vehicleno'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $checkintime = $_POST['checkintime'];
  $checkouttime = $_POST['checkouttime'];
  
  $Insert = "INSERT * INTO  `parking` (`full name`,`Vehicle no`,`Email`,`Phone no`,`check in`,`Check out`) VALUES ('$fullname','$vehicleno','$email','$phonenumber','$checkintime','$checkouttime')";
   $save =mysqli_query($conn,$Insert);
  ?>

 

</body>
</html>
