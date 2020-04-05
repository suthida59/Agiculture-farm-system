<!DOCTYPE html>
<html>
<title>เพิ่มข้อมูลสมาชิกเจ้าของฟาร์ม</title>
<?php
include("navbar_tot.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="\Farm\assets\bootstrap\dist\css\glyphicon.css">
    <link rel="stylesheet" type="text/css" href="\Farm\assets\bootstrap\dist\css\style.css">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/jquery.datetimepicker.css" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
    <link href="/Farm/css/table_overtext.css" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <title>เพิ่มข้อมูลสมาชิก Farm</title>
  </head>
  <br><br>
  <body>
   
        <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h2 style="text-align:center;">เพิ่มข้อมูลสมาชิก Farm</h2><br>
            <div class="container">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            <form action="prise_get.php" method="get" class="needs-validation" novalidate>
            <input type="hidden" name="district_id" id="district_id" value="<?=$_SESSION['district_id']?>">
            

            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            
<div class="w3-row-padding">
  <div class="w3-half">
    <label>ชื่อจริง</label>
    <input class="w3-input w3-border" type="text" name="user_flname" size="25"placeholder="กรอกชื่อจริง"onkeypress="not_number(event)" required>
      <div class="invalid-feedback">
            กรุณากรอกชื่อจริง!
      </div>
  </div>

  <div class="w3-half">
    <label>ชื่อผู้ใช้</label>
    <input class="w3-input w3-border" type="text" name="user_username" size="25" placeholder="ชื่อผู้ใช้"onkeypress="not_number(event)" required>
      <div class="invalid-feedback">
        กรุณากรอกชื่อผู้ใช้!
      </div><br>
  </div>

  <div class="w3-half">
    <label>รหัสผ่าน</label>
    <input class="w3-input w3-border" type="number" name="user_password"size="25" placeholder="รหัสผ่าน"onkeypress="not_number(event)" required>
        <div class="invalid-feedback">
          กรุณากรอกชื่อผู้ใช้!
        </div>
  </div>

  <div class="w3-half">
    <label>เบอร์โทร</label>
    <input class="w3-input w3-border" type="number" name="user_phone"size="25" placeholder="กรอกเบอร์โทร"onkeypress="not_number(event)" required>
        <div class="invalid-feedback">
            กรุณากรอกชื่อจริง!
       </div><br>
  </div>

  <div class="w3-half">
    <label>ชื่อฟาร์ม</label>
    <input class="w3-input w3-border" type="text"  name="user_farm"size="25"  placeholder="ชื่อฟาร์ม" onkeypress="not_number(event)" required> 
    <div class="invalid-feedback">
           กรุณากรอกชื่อฟาร์ม!
        </div>
  </div>

  <div class="w3-half">
    <label>ที่อยู่</label>
    <input class="w3-input w3-border" type="text" name="farm_location"size="25"  placeholder="ชื่อฟาร์ม" onkeypress="not_number(event)" required> <br>
    <div class="invalid-feedback">
            กรุณากรอกที่อยู่!
        </div>
  </div>





        <div class="w3-half">
        <label>เลือกสถานะ</label>
        <label for="lname">เลือกตำแหน่ง</label>
              <select  class="form-control" data-live-search="true" name="user_lavel" positionrequired onkeypress="not_number(event)" required>
                      <option>เจ้าของฟาร์ม</option>
                      
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
            <a class="btn btn-danger" href="prise_member.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
</div>