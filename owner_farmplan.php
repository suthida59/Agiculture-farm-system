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
    <link rel="stylesheet" href="\TOT\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/TOT/css/fonts.css" rel="stylesheet">
    <link href="/TOT/css/backtotop.css" rel="stylesheet">
  
  </head>
<br><br><br><br>

<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลแปลง</h2>
      <div class="w3-container">

      <?php 
     include('connection.php');

    $farm_id = $_GET["farm_id"];
    $query = "SELECT * FROM farm WHERE farm_id = '$farm_id'";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res)){
    ?>
    <form action="./owner_farmplandb.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="farm_id" value="<?php echo $farm_id;?>">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
           
            <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            
         <div class="w3-row-padding">
        
            <div class="w3-half">
            <h5 class="w3-text-grey"> รูปภาพ : 
             <input type="file"name="farm_imageplan"><br>
            </div>

            <div class="w3-half">
             <h5 class="w3-text-grey"> จำนวนแปลงผัก : 
            <input class="form-control" rows="5" id="comment"  type="text" name="farm_numplan" size=20 placeholder="กรุณากรอกจำนวนแปลงผัก"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกจำนวนแปลงผัก!
                   </div>
            </div>

             
             <h5 class="w3-text-grey"> ขนาดแปลงผัก : 
            <input class="form-control" rows="5" id="comment"  type="text" name="farm_sizeplan" size=20 placeholder="กรุณากรอกขนาดแปลงผัก"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกขนาดจำนวนแปลงผัก!
                   </div>
            
             
            
             <h5 class="w3-text-grey"> พืชที่ปลูก : 
            <textarea class="form-control" rows="5" id="comment"  type="text" name="farm_nameseed" size=20 placeholder="กรุณากรอกพืชที่ปลูก"onkeypress="not_number(event)" required></textarea>
            <div class="invalid-feedback">
                      กรุณากรอกพืชที่ปลูก!
                   </div>
            </div>

             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="owner_farm.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
         </form>
            
           
 
</div>
</div>
</div>
<table class="table table-bordered">
<?php
    }
?>
   
</body>
</html>




           
            
          