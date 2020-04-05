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
    <title>เพิ่มข้อมูลฟาร์ม</title>
  </head>
  <body>
<hr>
<hr>
<hr>
        
        <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h2 style="text-align:center;">เพิ่มข้อมูลฟาร์ม</h2><br>
            <div class="container">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
  <form action="owner_farmget.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
            <div class="form-group col-md">

            <label for="fname">รูปภาพ : <img src="images/camara.png"width="25" height="25"></label><br>
            <input type="file" name="farm_image" size="25"placeholder="กรอกชื่อจริง"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกเลือกภาพ!
                   </div>
             </div>

        </div>


            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการเพิ่มข้อมูล?')) return true; else return false;"><h5>เพิ่ม</h5></button>
            <a class="btn btn-danger" href="owner_farm.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>