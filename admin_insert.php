<!DOCTYPE html>
<html>
<title>เพิ่มข้อมูลวิสาหกิจชุมชน</title>
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
    <title>เพิ่มข้อมูลสมาชิก Admin วิสาหกิจชุมชน</title>
  </head>
  <body>
<br><br>
        
<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <nav class="navbar navbar-light" style="">
          <a ></a>
          <a ></a>
        </nav>
      <h3  class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลสมาชิกวิสาหกิจชุมชน</h3>
      <div class="w3-container">

            <form action="admin_get.php" method="get" enctype="multipart/form-data">


            <div class="w3-container">
  

  <div class="w3-row-padding">
<div class="w3-half">
  <h class="w3-text-grey"> ชื่อ-สกุล: 
  <input class="form-control" rows="5" id="comment"  type="text" name="user_flname" size=20 placeholder="กรุณากรอกชื่อ-สกุล"onkeypress="not_number(event)" required><br>
</div>

    
<div class="w3-half">
<h class="w3-text-grey"> ชื่อผู้ใช้: 
    <input class="form-control" rows="5" id="comment"  type="text" name="user_username" size=20 placeholder="กรุณากรอกชื่อผู้ใช้"onkeypress="not_number(event)" required><br>
</div>


<div class="w3-half">
<h class="w3-text-grey"> รหัสผ่าน: 
    <input class="form-control" rows="5" id="comment"  type="number" name="user_password" size=20 placeholder="กรุณากรอกรหัสผ่าน"onkeypress="not_number(event)" required ><br>
 </div>

 <div class="w3-half">
  <h class="w3-text-grey"> เบอร์โทร: 
     <input class="form-control" rows="5" id="comment"  type="number" name="user_phone" size=20 placeholder="กรุณากรอกเบอร์โทร"onkeypress="not_number(event)" required ><br>
  </div>
            
            

             <?php
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM district ORDER BY district_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<div class="w3-half">
<h class="w3-text-grey"> อำเภอ: 
            <select name="district_id" class="form-control" required>
              <option value="district_id">อำเภอ</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["district_id"];?>">
                <?php echo $results["district_name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $results["district_province"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
          

          <div class="w3-half">
          <h class="w3-text-grey"> สถานะ: 
              <select  class="form-control" data-live-search="true" name="user_lavel" positionrequired onkeypress="not_number(event)" required>
                      <option>Adminวิสาหกิจชุมชน</option>
                      
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
            <a class="btn btn-danger" href="addmin_tot.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>