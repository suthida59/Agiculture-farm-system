<?php

   session_start();
   include('connection.php');

   
   
    $cfquota_detail_id = $_GET["quotadetail_id"];//44

    $query0 = "SELECT * FROM quotadetail WHERE quotadetail_id = '$cfquota_detail_id'";
    //echo $query0;
     $res= mysqli_query($con, $query0);
      $row = mysqli_fetch_array($res);
   
       
       $quotadetail_numall= $row['quotadetail_numremain'];//100
       $quotadetail_number = $row['quotadetail_number']; //10
       $quotadetail_numgone = $row['quotadetail_numgone']; //รับไปแล้ว
   
       //echo $quotadetail_numall."<br>";
       //echo $quotadetail_number."<br>";

       $Calculate1 = abs($quotadetail_numall-$quotadetail_number);
      // echo $Calculate1."<br>";


       $Calculate2 = $quotadetail_number+$quotadetail_numgone;
      // echo $Calculate2."<br>";
       
      $q2="SELECT * FROM `farm` WHERE `farmuser_id`='".$_SESSION['user_id']."'";
      $re = mysqli_query($con,$q2);
      $roww = mysqli_fetch_array($re);

   
       $query= "INSERT INTO `cfquota`(`cfquota_id`,`cfquota_detail_id`,`cfquota_farm_id`)
       VALUES (null,'$cfquota_detail_id','".$roww["farm_id"]."' )";
   
       
   
       $query2 = "UPDATE quotadetail SET quotadetail_numremain = '$Calculate1',quotadetail_numgone ='$Calculate2'  WHERE quotadetail_id = '$cfquota_detail_id'";
   
   

   //echo $query."".$cfquota_detail_id;
   
      // echo $query."<br>";
      mysqli_query($con, $query);
   
      //echo $query2."<br>";
      mysqli_query($con, $query2);
      
       header("Location:plan.php");
       ?>
   <!--<script>
   history.go(-1);
   </script>-->