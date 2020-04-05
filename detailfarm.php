<?php
include("navbar_tot.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
<hr><hr><hr>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
  
  </head>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1100px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
    <!-- Right Column -->
    <div class="w3-container">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom ">
      <nav class="navbar navbar-right" style="">
          <!-- <a href="owner_farminsert.php" class="badge badge-success"><h3>เพิ่มข้อมูลฟาร์ม</h3></a> -->
          <a  href="owner_index.php" class="btn btn-danger" ><h6>ย้อนกลับ</h6></a>
          </nav>
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>ฟาร์ม : <?php print_r($_SESSION['user_farm']);?></h2>
        <div class="w3-container">
          <h5 class="w3-opacity "><p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i><b>ชื่อเจ้าของฟาร์มฟาร์ม : </b><?php print_r($_SESSION['user']);?></p></h5>
         

 <?php


  include('connection.php');
  $query ="SELECT * FROM farm WHERE farm_id ='$farm_id' ";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
      <button ><a href="./owner_farmedit.php? farm_id=<?php echo $row["farm_id"]; ?>">จัดการข้อมูลฟาร์ม</a></button><br>
      <center><img src="<?php echo $row["farm_image"];?>" width="500" height="250" > </center><br>
       <b> เบอร์โทร  : </b><?php echo $row["farm_phone"];?><br>
       <b> ที่ตั้ง  : </b><?php echo $row["farm_location"];?><br>
       <b> รหัสอำเภอ  : </b><?php echo $row["farm_address"];?>

      </tr>
  <?php  
  }
  ?>
  </table>

<hr>
<footer class="w3-container w3-teal w3-center w3-margin-top">
  
</footer>

</body>
</html>

                  







  

    