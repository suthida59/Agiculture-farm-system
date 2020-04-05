<!DOCTYPE html>
<html>
<title>อัพเดทข้อมูลการปลูก(ผักโควตา)</title>
<?php
include("navbar_tot.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
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
   h5 {
    font-size: 15px;
    }
   @media(min-width: 768px){
     h5{
      font-size: 1.18em;
     }
   }
</style>
<br><br>
  <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
  
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <nav class="navbar navbar-right" style="">
          <a></a> 
          <a  href="plan.php" class="btn btn-danger" >ย้อนกลับ</a>
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
      &nbsp;&nbsp;&nbsp;&nbsp;  โควตาที่ได้รับ(ก.ก.) : </b><?php echo $row["quotadetail_number"];?>
      &nbsp;&nbsp;&nbsp;&nbsp;  ส่งโควตาวันที่ : </b><?php echo $row["quotadetail_dateof"];?></h5>
    
    </tr>
<?php  
}
?>
<span style="padding-left:650px "><font color="red">* สามารถอัพเดทการปลูกได้เพียง 3 ครั้ง !</font></span><br>


<div class="w3-container">
            <div class="col-sm-4 col-md-8">
            <div class="form-row ">
            <?php
            $q2  ="SELECT * FROM cfquota,quotadetail   
            WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_id ='$cfquota_id'";
  $res = mysqli_query($con,$q2);

  $row = mysqli_fetch_array($res);
  $S1=$row["cfquota_note_updatetwo"];
  $S2=$row["cfquota_note_updatethree"];
if($S1=='' || $S2=='' ){
  

            ?>
            <form action="owner_update_farmup.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="cfquota_id" value="<?php echo $cfquota_id;?>">

           
            
            <h5 class="w3-text-grey">วันที่อัพเดทการปลูก : </h5>
            <input type="date" name="cfquota_date_updateone" class="form-control" size="25"placeholder="อัพเดทการปลูกครั้งที่ 1"onkeypress="not_number(event)" required>
            
            <div class="invalid-feedback">
                      กรุณาเลือกวันที่!
                   </div>
             </div>
           
             
         
            <h5 class="w3-text-grey">รูปภาพ : <img src="images/camara.png"width="25" height="25"></h5>
            <input type="file" name="cfquota_image_updateone" style="width:230px;"placeholder="เลือกรูปภาพ"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณาเลือกรูปภาพ!
                   </div>
             </div>

             
             <div class="form-group col-md ">
             <h5 class="w3-text-grey"> Note : </h5>
            <textarea class="form-control" rows="5" id="comment"  type="text" name="cfquota_note_updateone" size=30 placeholder="กรอกรายละเอียด"onkeypress="not_number(event)" required></textarea>
            <div class="invalid-feedback">
                      กรุณากรอกรายละเอียด!
                   </div>
             </div>
          </div>
             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="javascript:history.back(1)"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
            </form>
            
            <?php
          }
          ?>
  </div>
</div>
</div>
</div>
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
  </div>
  </div>
  </div>
<br><br>
         
             <br>
             <br>
             

            
             
           