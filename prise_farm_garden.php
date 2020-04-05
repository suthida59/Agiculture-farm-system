<!DOCTYPE html>
<html>
<title>ข้อมูลแปลงปลูก</title>
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

  </head>
<br><br>

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
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลแปลงปลูก</h3>
      <div class="w3-container">


      <div class="container-fluid">
      <br>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <th></th>

                  <th scope="col">ขนาดแปลง</th>
                  <th scope="col">จำนวน</th>
                  <th scope="col" colspan="4">ตรวจสอบ</th>
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

        <td><?php echo $row["garden_size"];?></td>
        <td><?php echo $row["garden_num"];?></td>

        <?php

        // $q1 ="SELECT * FROM garden WHERE garden_status = '".$row["garden_status"]."' ";
        // $ree = mysqli_query($con,$q1);
        // $num = mysqli_num_rows($ree);
       // echo $num;
        //echo $test;
        if($row["garden_status"]=="1"){ //ถ้า num = 1
          echo " <td>ตรวจสอบแล้ว</td>"; 
          ?>
          <td><a href="./prise_farm_gardendetail.php?garden_id=<?php echo $row["garden_id"]; ?> && garden_size=<?php echo $row["garden_size"]; ?>"><i class="btn btn-info">ดูรายละเอียด</a></td>
          <td></td>
          <?php

         } else {
        ?>
          <td><a href="./prise_farm_gardencheckdb.php?garden_id=<?php echo $row["garden_id"]; ?>"><i class="btn btn-warning">เช็คแปลง</a></td>
          <td><td>
         <?php } ?>
        

      </tr>
  <?php
  }
  ?>
  </table>
<br><br><br><br><br><br>

