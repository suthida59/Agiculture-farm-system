<!DOCTYPE html>
<html>
<title>เจ้าของฟาร์ม</title>
<?php
include("navbar_tot.php");

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
  </head>
  <style>
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/bg11.jpg");
  min-height: 100%;
}
</style>
<body>
<header class="bgimg-1 w3-container w3-min" id="home">
<!-- Pricing Section -->
<div class="w3-container w3-center  "style="padding:116px 50px" id="pricing">
<h3 style="text-align: center;">ยินดีต้อนรับ </h3> 
<h3>คุณ<?php print_r($_SESSION['user']);?> </h3>
        <hr class="my-2">
  <div class="w3-row-padding">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-12">ชื่อฟาร์ม : <?php print_r($_SESSION['user_farm']);?></li>
        <li class="w3-padding-16"><h5> 
         <a href="owner_farm.php"class="w3-padding-16">ข้อมูลฟาร์ม</a>
         </li>
        <li a href="#contact" class="w3-padding-16"><h5>
        <a href="plan.php"class="w3-padding-16">ข้อมูลการปลูก</a>
        </li>
        <li a href="#contact" class="w3-padding-16"><h5>
        <a href="historyquota.php"class="w3-padding-16">ประวัติการรับโควตา</a>
        </li>
        
        <li class="w3-light-grey w3-padding-24">
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-12">แนะนำ</li>
        <li class="w3-padding-16"><h5> 
        <a href="owner_seed.php"class="w3-padding-16">ผักแนะนำปลูก</a>
        </li>
        <li class="w3-padding-16"><h5> 
        <a href="owner_quota.php"class="w3-padding-16">โควตาวันนี้</a>
        </li>
        <li class="w3-padding-16"> <h5>
        <a href="owner_quotaall.php"class="w3-padding-16">โควตาทั้งหมด</a>
        </li>
        <li class="w3-light-grey w3-padding-24">
        </li>
      </ul>
    </div>
  </div>
</div>
      
</body>
