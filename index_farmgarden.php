<?php
include('h.php');
?>
<!DOCTYPE html>
<html>
<title>เกษตรฟาร์ม</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/Farm/css/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/bg2.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card" id="myNavbar">
	<a class="w3-bar-item w3-button " href=""><img id="" src="images/Logo.png" width="50" height="38" class="d-inline-block align-top" alt=""> <span class="text-warning h4"> เกษตรฟาร์ม</span></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <h5><a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> กลับสู่หน้าหลัก</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
    <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">หน้าหลัก</a>
  <a style=""> <button onclick="document.getElementById('id01').style.display='block'"  onclick="w3_close()" class="w3-bar-item w3-button" class="w3-bar-item w3-button"><i class="fa fa-user"></i> เข้าสู่ระบบ</button></a>
</nav>
<br>

<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
   <nav class="navbar navbar-light" style="">
          <a ></a>
          <a  href="javascript:history.back(1)" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>ข้อมูลแปลงปลูก</h3>
      <div class="w3-container">


      <div class="container-fluid">
      <br>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                  <th scope="col">ขนาดแปลง</th>
                  <th scope="col">จำนวน</th>
                  <th scope="col" colspan="4">สถานะ</th>
                </tr>
              </thead>
              <tbody>
<?php
  include('connection.php');
  //$query ="SELECT * FROM garden ";
  $farm_id = $_GET["farm_id"];
  $query ="SELECT *
  FROM garden  WHERE garden_farm_id = '$farm_id'";


  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
        <td><?php echo $row["garden_size"];?></td>
        <td><?php echo $row["garden_num"];?></td>
        

        <?php

        // $q1 ="SELECT * FROM garden WHERE garden_status = '".$row["garden_status"]."' ";
        // $ree = mysqli_query($con,$q1);
        // $num = mysqli_num_rows($ree);
       // echo $num;
        //echo $test;
        if($row["garden_status"]=="1"){ //ถ้า num = 1
    
          ?>
          <td><a href="./index_farmgarden_detail.php?garden_id=<?php echo $row["garden_id"]; ?> && garden_size=<?php echo $row["garden_size"]; ?>"><i class="btn btn-info">ดูรายละเอียด</a></td>
          <td></td>
          <?php

         } else {
            echo " <td>ยังไม่มีข้อมูล</td>"; 
        ?>
        
          <td><td>
         <?php } ?>
        

      </tr>
  <?php
  }
  ?>
  </table>
<br><br><br><br><br><br>