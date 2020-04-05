<?php
     include('connection.php');

    $user_id = $_GET["user_id"];
    $user_flname = $_GET["user_flname"];
    $user_username = $_GET["user_username"];
    $user_password = $_GET["user_password"];
    $user_phone = $_GET["user_phone"]; 
    $user_lavel = $_GET["user_lavel"];
    $user_farm = $_GET["user_farm"];
    $district_id = $_GET['district_id'];

    $farm_location = $_GET['farm_location'];
    
    
    $sql ="UPDATE user SET user_flname='$user_flname',user_username='$user_username',
    user_password='$user_password',user_phone='$user_phone',user_lavel='$user_lavel',user_farm='$user_farm',district_id='$district_id' WHERE user_id='$user_id'";
    mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

    $sql2 = "UPDATE  farm SET  farm_name='$username',farm_name='$user_farm',farm_phone='$user_phone',
    farm_flname='$user_flname' WHERE farmuser_id='$user_id'";
    mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

    header("Location: prise_member.php");
?>