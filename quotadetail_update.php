<?php
        include('connection.php');
   
       $quotadetail_id = $_POST["quotadetail_id"];
       $quotadetail_nameseed = $_POST["quotadetail_nameseed"];
       $quotadetail_numall = $_POST["quotadetail_numall"];
       $quotadetail_number = $_POST["quotadetail_number"];

    $query =" UPDATE `quotadetail` SET `quotadetail_nameseed`='$quotadetail_nameseed',
    `quotadetail_numall`='$quotadetail_numall',
    `quotadetail_number`='$quotadetail_number' WHERE quotadetail_id='$quotadetail_id'";
 
     
 //echo $query;
    mysqli_query($con,$query); 
   // header("Location:quotadetail.php?quota_id=$quotadetail_id");
      ?>
   
  <script>
history.go(-2);
</script>