<?php
   include('connection.php');

   $farm_id = $_POST["farm_id"];
   $farm_letlong = $_POST["farm_letlong"];

   $query ="UPDATE farm SET farm_letlong = '$farm_letlong' WHERE farm_id='$farm_id'";
    mysqli_query($con,$query);

    echo $query;
   // header("Location: owner_farm.php");



?>