<?php
     include('connection.php');

    $quotadetail_id = $_GET["quotadetail_id"];
    
    $query = "DELETE FROM quotadetail WHERE quotadetail_id='$quotadetail_id'";
    mysqli_query($con, $query);
    // header("Location:quotadetail.php");
   
?>
 <script>
history.go(-1);
</script>
