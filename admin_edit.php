<!DOCTYPE html>
<html>
<title>ผู้ดูแลระบบทีโอที</title>
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
    <title>แก้ไขข้อมูลสมาชิก</title>
  </head>
  <br><br>
<div class="w3-content w3-margin-top" style="max-width:1150px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>แก้ไขข้อมูลสหกิจชุมชน</h2>
      <div class="w3-container">
    <?php 
    include('connection.php');

    $user_id = $_GET["user_id"];
    $query = "SELECT * FROM user WHERE user_id = '$user_id'";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res)){
    ?>
    <form action="./admin_update.php" method="get"class="needs-validation" novalidate>
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">

        <input type="text" style="display: none;" class="form-control" id="user_id" value="<?php echo $row['user_id'] ?>" name="user_id" required> <!--รหัสอำเภอ -->
        <input type="text" style="display: none;" class="form-control" id="district_id" value="<?php echo $row['district_id'] ?>" name="district_id" required> <!--รหัสอำเภอ -->

         <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
           
            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            
         <div class="w3-row-padding">
        
            <div class="w3-half">
             <h5 class="w3-text-grey"> ชื่อ-สกุล : 
            <input type="text" name="user_flname" class="form-control" value="<?php echo $row["user_flname"]?>" size="25" placeholder="กรอกนามชื่อ-สกุล"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อ-สกุลจริง!
                   </div>
             </div>

             <div class="w3-half">
             <h5 class="w3-text-grey"> ชื่อผู้ใช้ : 
            <input type="text" name="user_username" class="form-control" value="<?php echo $row["user_username"]?>" size="25" placeholder="กรอกชื่อผู้ใช้"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อผู้ใช้!
                   </div>
             </div>

             <div class="w3-half">
             <h5 class="w3-text-grey"> รหัสผ่าน : 
            <input type="text" name="user_password" class="form-control" value="<?php echo $row["user_password"]?>" size="25" placeholder="รหัสผ่าน"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกรหัสผ่าน!
                   </div>
             </div>
        
             <div class="w3-half">
             <h5 class="w3-text-grey"> เบอร์โทร : 
            <input type="number" name="user_phone" class="form-control"  value="<?php echo $row["user_phone"]?>" size="25" placeholder="กรอกนามสกุล"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกเบอร์โทร
                   </div>
             </div>
     
        <div class="form-row">
                  <div class="form-group col-md">
                  <h5 class="w3-text-grey"> สถานะ : 
                    <select id="user_lavel" class="form-control selectpicker" data-live-search="true" name="user_lavel" required>
                      <option <?php if ($row['user_lavel'] == 'Admin วิสาหกิจชุมชน') echo 'selected="selected"'; ?> >Adminวิสาหกิจชุมชน</option>
                    </select>
                    <div class="invalid-feedback">
                      กรุณาระบุสถานะ!
                    </div>
                  </div>
                  </div>
                  </div>
                 <br><br>
            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="addmin_tot.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
    </form>
    <?php
    }
    ?>
</body>
</html>

<br><br> <br><br> <br><br>
