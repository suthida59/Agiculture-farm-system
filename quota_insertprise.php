<!DOCTYPE html>
<html>
<title>เพิ่มข้อมูลโควตาผัก</title>
<?php
include("navbar_tot.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
    <title>เพิ่มข้อโควตา</title>
  </head>
  <body>
  <br><br>
        
  <div class="w3-content w3-margin-top" style="max-width:1150px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <br>
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลโควตา</h3>
      <div class="w3-container">
  <form action="quota_get.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="quota_id" value="<?php echo $row["quota_id"];?>">
  <div class="w3-container">
  
  <div class="w3-row-padding">
    <div class="w3-half">
    <h class="w3-text-grey">ชื่อโควตา :
            <input type="text" name="quota_name" class="form-control" size="25"placeholder="ชื่อโควตา"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อโควตา!
                   </div>
             </div>

             <div class="w3-half">
             <h class="w3-text-grey">วันที่ :
            <input type="date" name="quota_date" class="form-control" size="25"placeholder=""onkeypress="not_number(event)" required><br>
            <div class="invalid-feedback">
                      กรุณากรอกวันที่!
                   </div>
             </div>
 
             <div class="w3-half">
             <h class="w3-text-grey">เจ้าของโควตา :
            <input type="text" name="quota_customer" class="form-control" size="25"placeholder="กรอกส่งโควตาลูกค้า"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกส่งโควตาลูกค้า!
                   </div>
             </div>
  
            
             <div class="w3-half">
             <h class="w3-text-grey">วันที่ต้องการผลผลิต :
            <input type="date" name="quota_need" class="form-control" size="25"placeholder=""onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกวันที่ต้องการผลผลิต!
                   </div>
             </div>
        
        </div>
        <br><br>
      

            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการเพิ่มข้อมูล?')) return true; else return false;"><h5>เพิ่ม</h5></button>
            <a class="btn btn-danger" href="quota_prise.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
<br><br><br><br><br><br>

