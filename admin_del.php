<?php
     include('connection.php');
    $user_id = $_GET["user_id"];
    
    $query = "DELETE FROM user WHERE user_id='$user_id'";
    mysqli_query($con,$query);

    header("Location: addmin_tot.php");
?>