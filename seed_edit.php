<!DOCTYPE html>
<html>
<title>แก้ไขผักแนะนำปลูก</title>
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
    <title>แก้ไขข้อมูลผัก</title>
  </head>
 <br><br>
    <?php 
    include('connection.php');

    $seed_id = $_GET["seed_id"];
    $query = "SELECT * FROM seed WHERE seed_id = '$seed_id'";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res)){
    ?>
    <form action="./seed_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="seed_id" value="<?php echo $seed_id;?>">
        <input type="hidden" name="seed_user_dis" id="seed_user_dis" value="<?=$_SESSION['district_id']?>">
        

        <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h3 style="text-align:center;">แก้ไขข้อมูลสมาชิก</h3><br>
            <div class="container">
            <div class="w3-container">
  
             <div class="w3-row-padding">
             <div class="w3-half">
             <h class="w3-text-grey">รูปภาพ : 
             <input  type="file"name="seed_image" >
             </div>

             <div class="w3-half">
             <h class="w3-text-grey">ชื่อสามัญ :
            <input class="form-control" type="text" name="seed_name" value="<?php echo $row["seed_name"]?>" size="25" placeholder="ชื่อสามัญ"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ!
                   </div>
             </div>
        
             <div class="w3-half">
             <h class="w3-text-grey">ชื่อวิทยาศาสตร์ :
            <input class="form-control" type="text" name="seed_namesci" value="<?php echo $row["seed_namesci"]?>" size="25" placeholder="ชื่อวิทยาศาสตร์"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อวิทยาศาสตร์!
                   </div>
             </div>

             <div class="w3-half">
             <h class="w3-text-grey">ราคา/กิโลกรัม:
            <input class="form-control" type="number" name="seed_prise" value="<?php echo $row["seed_prise"]?>" size="25" placeholder="ราคา"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกราคา!
                   </div>
             </div>
       
       
             <div class="w3-half">
            <h class="w3-text-grey">ระยะที่ใช้ปลูก/วัน :
            <input class="form-control" type="text" name="seed_dateof" value="<?php echo $row["seed_dateof"]?>" size="25" placeholder="ระยะที่ใช้ปลูก/วัน"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกระยะที่ใช้ปลูก
                   </div>
             </div>

             <div class="w3-half">
          <h class="w3-text-grey"> ประเภท: 
              <select  class="form-control" data-live-search="true" name="seed_lavel" value="<?php echo $row["seed_lavel"]?>"positionrequired onkeypress="not_number(event)" required>
                      <option>ผัก</option> 
                      <option>ผลไม้</option> 
                      <option>ข้าว</option> 
                    </select>
                    <div class="invalid-feedback">
                      
                   </div>
             </div>
        </div>
        <br>  <br> 
        
            
             
             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="seed_index.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
    
    <?php
    }
    ?>
</body>
</html>
<br><br><br><br><br>