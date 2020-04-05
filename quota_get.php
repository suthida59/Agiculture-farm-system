<?php
    include('connection.php');

    session_start();
    
    $quota_date = $_POST["quota_date"];
    $quota_name = $_POST["quota_name"];
    $quota_need = $_POST["quota_need"];
    $quota_customer = $_POST["quota_customer"];
   
   

   
    $query= "INSERT INTO `quota`(`quota_id`, `quota_name`, `quota_date`, `quota_customer`, 
    `quota_need`, `quota_memberid`, `quota_district`) 
    VALUES (null,'$quota_name','$quota_date','$quota_customer',
    '$quota_need','".$_SESSION["user_id"]."','".$_SESSION["district_id"]."')";
    
    mysqli_query($con, $query);
//echo $query;
   header("Location:quota_prise.php");
    ?>
