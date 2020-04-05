<?php
     include('connection.php');

    session_start();
    $quota_id = $_POST["quota_id"];
    $quota_date = $_POST["quota_date"];
    $quota_name = $_POST["quota_name"];
    $quota_need = $_POST["quota_need"];
    $quota_customer = $_POST["quota_customer"];
    $quota_close = $_POST["quota_close"];
    $quota_memberid = $_POST["quota_memberid"];
    $quota_created_at = $_POST["quota_created_at"];
    $quota_update_at = $_POST["quota_update_at"];

   

    $query ="UPDATE quota SET quota_date='$quota_date',quota_name='$quota_name',
    quota_need='$quota_need',quota_customer='$quota_customer',quota_close='$quota_close',quota_memberid='".$_SESSION["user_id"]."',quota_created_at='$quota_created_at',
    quota_update_at='$quota_update_at' WHERE quota_id='$quota_id'";
    mysqli_query($con,$query);

    header("Location: quota_prise.php");
?>