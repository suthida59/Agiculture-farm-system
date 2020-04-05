<?php
     include('connection.php');

    $user_id = $_GET["user_id"];
    $user_flname = $_GET["user_flname"];
    $user_username = $_GET["user_username"];
    $user_password = $_GET["user_password"];
    $user_phone = $_GET["user_phone"]; 
    $user_lavel = $_GET["user_lavel"];
    $district_id = $_GET['district_id'];
    $user_farm = $_GET['user_farm'];

    $query ="UPDATE user SET user_flname='$user_flname',user_username='$user_username',
    user_password='$user_password',user_phone='$user_phone',user_lavel='$user_lavel',district_id='$district_id',user_farm='$user_farm' WHERE user_id='$user_id'";
    mysqli_query($con,$query);

    header("Location: addmin_tot.php");
?>