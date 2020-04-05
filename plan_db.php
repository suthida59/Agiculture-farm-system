<?php
     include('connection.php');
    
     $cfquota_id = $_GET["cfquota_id"];
    
    $query = "DELETE FROM cfquota WHERE cfquota_id='$cfquota_id'";
    mysqli_query($con,$query);


    header("Location:plan.php");
?>