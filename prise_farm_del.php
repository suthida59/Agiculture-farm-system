<?php
     include('connection.php');
    
     $farm_id = $_GET["farm_id"];
    
    $query = "DELETE FROM farm WHERE farm_id='$farm_id'";
    mysqli_query($con,$query);


    header("Location: prise_farm.php");
?>