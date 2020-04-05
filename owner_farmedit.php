<!DOCTYPE html>
<html>
<title>แก้ไขข้อมูลฟาร์ม</title>
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
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    
  </head>
  
<br><br>
<div class="w3-content w3-margin-top" style="max-width:1150px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <br>
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลฟาร์ม</h3>
      <div class="w3-container">
    <?php 
     include('connection.php');

    $farm_id = $_GET["farm_id"];
    $query = "SELECT * FROM farm WHERE farm_id = '$farm_id'";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res)){
    ?>
    <form action="./owner_farmupdate.php" method="post" enctype="multipart/form-data"class="needs-validation">
        <input type="hidden" name="farm_id" value="<?php echo $farm_id;?>">

        <input type="text" style="display: none;" class="form-control" id="farm_address" value="<?php echo $row['farm_address'] ?>" name="farm_address" required> <!--รหัสอำเภอ -->
        <input type="text" style="display: none;" class="form-control" id="farmuser_id" value="<?php echo $row['farmuser_id'] ?>" name="farmuser_id" required> <!--รหัสผู้ใช้ -->

        <div class="w3-container">
  
    <div class="w3-row-padding">
    <div class="w3-half">
  
    <h class="w3-text-grey">รูปภาพ : 
       <input type="file"name="farm_image">
       </div>

       <div class="w3-half">
       <h class="w3-text-grey">ชื่อฟาร์ม :
            <input type="text" name="farm_name" class="form-control" value="<?php echo $row["farm_name"]?>" size="25" placeholder="ชื่อฟาร์ม"onkeypress="not_number(event)" disable >
            <div class="invalid-feedback">
                      กรุณากรอกชื่อฟาร์ม!
                   </div>
             </div>

             <div class="w3-half">
             <h class="w3-text-grey"> ชื่อเจ้าของฟาร์ม : 
            <input type="text" name="farm_flname" class="form-control" value="<?php echo $row["farm_flname"]?>" size="25" placeholder="ชื่อเจ้าของฟาร์ม"onkeypress="not_number(event)" required validation>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อเจ้าของฟาร์ม!
                   </div>
             </div>

             <div class="w3-half">
             <h class="w3-text-grey"> ที่ตั้ง : 
            <input type="text" name="farm_location" class="form-control" value="<?php echo $row["farm_location"]?>" size="25" placeholder="ที่ตั้ง"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกที่ตั้ง
                   </div>
             </div>
       
             <div class="w3-half">
             <h class="w3-text-grey"> เบอร์โทร : 
            <input type="number"  name="farm_phone" class="form-control" value="<?php echo $row["farm_phone"]?>" size="25" placeholder="เบอร์โทร/วัน"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกเบอร์โทร
                   </div>
             </div>
           
             <h class="w3-text-grey"> พิกัด Lat : Long ของคุณ : 
             <div class="card text-center">
				     <div class="card-header">
             <div class="w3-half">
             
             <div id="geo_data"></div>
             <input type="hidden" name="your_lat" id="your_lat" class="form-control" value=""> <!-- รับค่าจากตัวแปร your_lat -->
             <input type="hidden" name="your_long" id="your_long" class="form-control" value=""> <!-- รับค่าจากตัวแปร your_long -->
        <script type="text/javascript">
        if ( navigator.geolocation ) {
            // ตรงนี้คือรองรับ geolocation
            navigator.geolocation.getCurrentPosition(function(location) {
                var location = location.coords;
                $("#geo_data").html
                ('lat: '+location.latitude+'<br />long: '+location.longitude);
                document.getElementById('your_lat').value = location.latitude; //เก็บค่าไว้ในตัวแปรyour_lat
                document.getElementById('your_long').value = location.longitude; //เก็บค่าไว้ในตัวแปรyour_long
            }, function() {
                alert('มีปัญหาในการตรวจหาตำแหน่ง');
            });
        } else {
            alert('เบราเซอร์นี้ไม่รองรับ geolocation');
        }
        </script>
</div>
</div>
             </div>
             </div>
             
             <div>
<br><br>
             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="owner_farm.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
<br><br><br><br><br>
    
    <?php
    }
    ?>
<script type="text/javascript">
    (function() {
      'use strict';
      window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      }
      form.classList.add('was-validated');
      }, false);
      });
      }, false);
      })();
    </script>

</body>
</html>