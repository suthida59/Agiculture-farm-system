<!DOCTYPE html>
<html>
<title>อัพเดทข้อมูลการปลูก</title>
<?php
include("navbar_tot.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
<br><br>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
  
  </head>
  <style type="text/css">
  
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   #imgg{
   	float: left;
   	margin : 10px;
   
   }
</style>

  <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1100px;">

<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
  
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <nav class="navbar navbar-right" style="">
        <a ></a>
        <a  href="javascript:history.back()" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>อัพเดทการปลูก</h3>
      <div class="w3-container">
      
    
<?php
include('connection.php');


$cfquota_id = $_GET["cfquota_id"];

$query ="SELECT * FROM cfquota,quotadetail   
WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_id ='$cfquota_id'"; //่join 2 ตาราง

$res = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($res)) {
  ?>
      <h5 class="w3-text-grey w3-padding-12"><i class="fa fa-book fa-fw fa-fw w3-margin-center w3-large w3-text-teal"></i> <b> ชื่อผัก : </b><?php echo $row["quotadetail_nameseed"];?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  จำนวนโควตาที่ได้รับ(ก.ก.) : </b><?php echo $row["quotadetail_number"];?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ส่งผลผลิตวันที่ : </b><?php echo $row["quotadetail_dateof"];?></h5><br><br>
      
   
    </tr>
<?php  
}
?>

<div id="content">
<div class="form-row ">
<div class="table-responsive">
<table class="table table-bordered">
<tr>

  <?php
   $query ="SELECT * FROM cfquota,quotadetail   
   WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_id ='$cfquota_id'";
    $res = mysqli_query($con,$query);

    $row = mysqli_fetch_array($res);
     
      $S0=$row["cfquota_note_updateone"];
      $S1=$row["cfquota_note_updatetwo"];
      $S2=$row["cfquota_note_updatethree"];

    if($S0!=''){
      echo "<td><h5> วันที่อัพเดท<br>(เริ่มปลูก) : <br>  ".$row['cfquota_date_updateone']."</h5>";
      echo"  <center><img src=".$row['cfquota_image_updateone']." width='250' ></center><br>";
      echo" <h5> Note : อัพเดทการปลูกครั้งที่ 1   ".$row['cfquota_note_updateone']." </h5><br><br><br></td>";
    }
     if($S1!='' && $S2!=''){
    
       echo "<td> <h5>  วันที่อัพเดท : <br> ".$row['cfquota_date_updatetwo']."</h5>";
       echo "<center><img src=".$row['cfquota_image_updatetwo']." width='250' height='200'></center> <br>";  
       echo "<h5> Note :อัพเดทการปลูกครั้งที่ 2  ".$row["cfquota_note_updatetwo"]." </h5><br><br><br></td> " ;

       echo "<td> <h5> วันที่อัพเดท :  <br> ".$row['cfquota_date_updatethree']."</h5>";
       echo "    <center><img src=".$row['cfquota_image_updatethree']." width='250' height='200'></center>";
       echo "     <h5> Note :อัพเดทผลผลิต  ".$row["cfquota_note_updatethree"]." </h5></td>";
     }elseif($S1!=''){
     
      echo "<td> <h5>  วันที่อัพเดท : <br> ".$row['cfquota_date_updatetwo']."</h5>";
      echo "<center><img src=".$row['cfquota_image_updatetwo']." width='250' height='200'></center> <br>";  
      echo "<h5> Note :อัพเดทการปลูกครั้งที่ 2  ".$row["cfquota_note_updatetwo"]." </h5><br><br><br></td> " ;

     }
     elseif($S2!=''){
      echo " <form method  = 'post'
      onSubmit= 'window.close();'>
 
     </form>";

     }
     

        
  ?> 
 
  </tr>
  </table>
  
<br><br>
         
             <br>
             <br>
             
           