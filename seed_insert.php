<!DOCTYPE html>
<html>
<title>เพิ่มข้อมูลผักแนะนำปลูก</title>
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
    <title>แก้ไขข้อมูล</title>
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
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลผัก</h3>
      <div class="w3-container">
            <form action="seed_get.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="seed_user_dis" id="seed_user_dis" value="<?=$_SESSION['district_id']?>">
            <!--?php echo $_SESSION['district_id'] ? การเรียก echo ของ SESSION-->

            <div class="w3-container">
  
  <div class="w3-row-padding">
    <div class="w3-half">
    <h class="w3-text-grey">รูปภาพ : <img src="images/camara.png"width="25" height="25"><br>
       <input type="file"name="seed_image"style="width:230px;">
       </div>


       <div class="w3-half">
       <h class="w3-text-grey">ชื่อสามัญ :
            <input type="text" name="seed_name" class="form-control" size="50" placeholder="กรอกชื่อสามัญ"onkeypress="not_number(event)" required><br>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ!
                   </div>
             </div>  


        <div class="w3-half">
       <h class="w3-text-grey">ชื่อวิทยาศาสตร์ :
            <input type="text" name="seed_namesci" class="form-control" size="50" placeholder="กรอกชื่อวิทยาศาสตร์"onkeypress="not_number(event)" required >
            <div class="invalid-feedback">
                      กรุณากรอก>ชื่อวิทยาศาสตร์!
                   </div>
             </div>  

             <div class="w3-half">
       <h class="w3-text-grey">ราคา :
            <input type="number" name="seed_prise" class="form-control" size="50" placeholder="กรอกราคา/กิโลกรัม"onkeypress="not_number(event)" required ><br>
            <div class="invalid-feedback">
                      กรุณากรอกราคา!
                   </div>
             </div>  

          
             <div class="w3-half">
       <h class="w3-text-grey">ระยะที่ใช้ปลูก/วัน :
            <input type="type" name="seed_dateof" class="form-control" size="50" placeholder="กรอกระยะเวลาที่ปลูก/วัน"onkeypress="not_number(event)" required >
            <div class="invalid-feedback">
                      กรุณากรอกระยะที่ใช้ปลูก/วัน!
                   </div>
             </div>  

             <div class="w3-half">
          <h class="w3-text-grey"> ประเภท: 
              <select  class="form-control" data-live-search="true" name="seed_lavel" positionrequired onkeypress="not_number(event)" required>
                      <option>ผัก</option> 
                      <option>ผลไม้</option> 
                      <option>ข้าว</option> 
                    </select>
                    <div class="invalid-feedback">
                      
                   </div>
             </div>
        </div>
        <br>


           
            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการเพิ่มข้อมูล?')) return true; else return false;"><h5>เพิ่ม</h5></button>
            <a class="btn btn-danger" href="seed_index.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
<br><br><br><br><br><br>