<?php 

    require_once("connection.php");
    $query = " select * from parking1 ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="table1.css">
    <title>View Records</title>
</head>
<body class="">

        <div class="container">
            
                        <table class="table table-bordered" Aline="centre">
                            <tr>
                                <td> Name </td>
                                <td> Vehicle No </td>
                                <td> Email </td>
                                <td> Phone No </td>
                                <td> Parking Time </td>
                                
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name = $row['name'];
                                        $vehicleno = $row['Vehicleno'];
                                        $email = $row['Email'];
                                        $phonenumber = $row['Phoneno'];
                                        $time = $row['Time'];
                            ?>
                                    <tr>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $vehicleno ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $phonenumber ?></td>
                                        <td><?php echo $time ?></td>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    
        </div>
    
</body>
</html>