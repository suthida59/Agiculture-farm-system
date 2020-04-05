<?php
     include('connection.php');

    $garden_id = $_GET["garden_id"];
    
   // $query = "DELETE FROM garden WHERE garden_id='$garden_id'";
    //mysqli_query($con,$query);


     //ลบสองตาราง
     $query = "DELETE FROM `garden`, `gardendetail`
     USING `garden`
     INNER JOIN `gardendetail`
     WHERE `garden`.`garden_id` = '$garden_id'
     AND `gardendetail`.`gardendetail_garid` = `garden`.`garden_id`
     ";
     mysqli_query($con,$query);

   // header("Location: owner_insertfarmplan.php?farm_id=$farm_id");
?>
<script>history.go(-1);
</script>
