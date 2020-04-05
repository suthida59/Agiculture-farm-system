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
<br><br><br><br>

<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <nav class="navbar navbar-light" style="">
          <a ></a>
          <a  href="owner_insertfarmplan.php" class="btn btn-danger" ><h5>ย้อนกลับ</h5></a>
        </nav>
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>ข้อมูลการปลูกของแปลง</h2>
      <div class="w3-container">


      <div class="container-fluid">
      <br>
     
        <h3 style="text-align: center;">ข้อมูลการปลูกของแปลง</h3>
       
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <th></th>
                  
                  <th scope="col">ชื่อผัก</th>
                  <th scope="col">วันที่ปลูก</th>
                  <th scope="col" colspan="4"></th>
                </tr>
              </thead>
              <tbody>

      <?php
  include('connection.php');
  
  $query ="SELECT * FROM gardendetail ";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
    <td></td>
         
        <td><?php echo $row["gardendetail_nameseed"];?></td>
        <td><?php echo $row["gardendetail_date"];?></td>  
        
       
      </tr>
  <?php  
  }
  ?>
  </table>