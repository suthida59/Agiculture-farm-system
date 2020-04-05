<?php
     include('connection.php');

    $user_id = $_GET["user_id"];
    $farm_location = $_GET['farm_location'];

   // $query = "DELETE FROM user WHERE user_id='$user_id'";
    //mysqli_query($con,$query);

    //ลบสองตาราง
    $query = "DELETE FROM `user`, `farm`
    USING `user`
    INNER JOIN `farm`
    WHERE `user`.`user_id` = '$user_id'
    AND `farm`.`farmuser_id` = `user`.`user_id`
    ";
    mysqli_query($con,$query);
    


    header("Location: prise_member.php");
?>

