<?php
     include('connection.php');

    $seed_id = $_GET["seed_id"];
    
    $query = "DELETE FROM seed WHERE seed_id='$seed_id'";
    mysqli_query($con,$query);

    header("Location: seed_index.php");
?>