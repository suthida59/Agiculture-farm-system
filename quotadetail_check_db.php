<?php
   
   include('connection.php');

   
   
   $cfquota_id = $_POST["cfquota_id"];
   $cfquota_send = $_POST["cfquota_send"];
   //$quotadetail_id = $_POST["quotadetail_id"];
   
  // echo"$cfquota_id";
   //echo"$cfquota_send";

   $query0 = "SELECT * FROM cfquota WHERE cfquota_id = '$cfquota_id'";
   $res= mysqli_query($con, $query0);
   $row = mysqli_fetch_array($res);
   
   
     
     $query2 ="UPDATE `cfquota` SET `cfquota_send`='$cfquota_send' WHERE `cfquota_id`='$cfquota_id'";
    // echo"$query0";
      mysqli_query($con,$query2);
        
		//header("Location: quotadetail_check.php?quotadetail_id=86");
       ?>
       <script>
history.go(-1);
</script>
  