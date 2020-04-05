<?php
   
   include('connection.php');

   $garden_id = $_GET["garden_id"];
  
  
     $query2 ="UPDATE `garden` SET `garden_status`='1' WHERE `garden_id`='$garden_id'";
    // echo"$query0";
      mysqli_query($con,$query2);
        
		//header("Location: quotadetail_check.php?quotadetail_id=86");
       ?>
       <script>
history.go(-1);
</script>
  