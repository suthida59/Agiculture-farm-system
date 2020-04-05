<?php
     include('connection.php');

    $quotadetail_nameseed = $_POST["quotadetail_nameseed"];
    $quotadetail_numall = $_POST["quotadetail_numall"];
    $quotadetail_number = $_POST["quotadetail_number"];
    $quotaid=$_POST["quotaid"];
    $quota_need = $_POST["quota_need"];

   // $quotadetail_numgone = $_POST["quotadetail_numgone"];
    //$quotadetail_numremain = $_POST["quotadetail_numremain"];

  

    $query= "INSERT INTO `quotadetail`(`quotadetail_id`,`quotadetail_cycle_id`,`quotadetail_nameseed`,`quotadetail_dateof`,
     `quotadetail_numall`, `quotadetail_numgone`, `quotadetail_numremain`,
   `quotadetail_number`)
   
    VALUES (null,'$quotaid','$quotadetail_nameseed','$quota_need','$quotadetail_numall','0','$quotadetail_numall',
    '$quotadetail_number')";
     //echo $query;
    mysqli_query($con, $query);


    //$x = $quotadetail_numremain - $quotadetail_number;
    //$y = $quotadetail_numgone + $x;

    //$query2 = "INSERT INTO 'cfquota' ('cfquota_detail_id') VALUES('quotadatail_id')";


    //$query3="UPDATE 'quotadetail' SET 'quotadetail_numremain' = '$x' , 'quotadetail_number'='$y' WHERE 'quotadetail_id' = '$quotadetail_id'";
    //mysqli_query($con, $query3);

   
   

    //header("Location:quotadetail.php");
    ?>
<script>
history.go(-1);
</script>