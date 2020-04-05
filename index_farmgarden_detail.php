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
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>รายละเอียดแปลงปลูก</h3>
      <div class="w3-container">

      <div class="container-fluid">    
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <th></th>
                  
                  <th scope="col" >ขนาดแปลง</th>
                  <th scope="col">พื้นที่ปลูก(ทั้งหมด)</th>
                  <th scope="col">รูปภาพ</th>
                  <th scope="col">ชื่อผัก</th>
                  <th scope="col">พื้นที่ใช้ปลูก</th>
                  <th scope="col">วันที่ปลูก</th>
                  <th scope="col" colspan="4"></th>
                </tr>
              </thead>
              <tbody>
<?php
  include('connection.php');
  $garden_id = $_GET["garden_id"];
  $garden_size = $_GET["garden_size"];
  $gardendetail_id = $_GET["garden_id"];
  $query ="SELECT *
   FROM garden AS g
   LEFT JOIN gardendetail AS ug  ON g.garden_id = ug.gardendetail_garid
   LEFT JOIN farm AS f           ON g.garden_farm_id = f.farm_id
   LEFT JOIN cfquota AS c        ON ug.gardendetail_idcfquota = c.cfquota_id
   LEFT JOIN quotadetail AS q    ON c.cfquota_detail_id = q.quotadetail_id
   WHERE garden_id ='$garden_id' AND number='1'";

  $res = mysqli_query($con,$query);

  $query1 ="SELECT *
  FROM garden AS g
  LEFT JOIN gardendetail AS ug  ON g.garden_id = ug.gardendetail_garid
  LEFT JOIN farm AS f           ON g.garden_farm_id = f.farm_id
  LEFT JOIN cfquota AS c        ON ug.gardendetail_idcfquota = c.cfquota_id
  LEFT JOIN quotadetail AS q    ON c.cfquota_detail_id = q.quotadetail_id
  WHERE garden_id ='$garden_id' AND number='2'";

$query2 ="SELECT *
FROM garden AS g
LEFT JOIN gardendetail AS ug  ON g.garden_id = ug.gardendetail_garid
LEFT JOIN farm AS f           ON g.garden_farm_id = f.farm_id
LEFT JOIN cfquota AS c        ON ug.gardendetail_idcfquota = c.cfquota_id
LEFT JOIN quotadetail AS q    ON c.cfquota_detail_id = q.quotadetail_id
WHERE garden_id ='$garden_id' AND number='3'";
 $res2 = mysqli_query($con,$query2);
$b=0;
$b1=0;
$b2=0;
$gg01= $garden_size;
$gg01= explode("x", $gg01);

 $res1 = mysqli_query($con,$query1);?>
    
    
        <?php
    while($row = mysqli_fetch_array($res)) {
    ?>

    <td></td>
        
        <th ><?php if($b==0){ echo $row["garden_size"];
            $b=1;}?></th>
        <?php $gg= $row["garden_size"];
              $gg1= explode("x", $gg);
              $gg2= explode("x", $gg);
              ?>
        
        <td><?php if($b1==0){ echo $total=$gg1[0]*$gg2[1];
            $b1=1;}?></td>
      
        <td><img src="<?php echo $row["gardendetail_image"];?>" width="250" height="150" ></td>
        <td><?php echo $row["gardendetail_nameseed"];?><?php echo $row["quotadetail_nameseed"];?></td>
        <td><?php echo $row["gardendetail_areause"];?></td>
        <td><?php echo $row["gardendetail_dateplan"];?></td>
        <td></td>
        
      
      </tr>
      
  <?php  
  
  }
  $c=0;
  $c1=0;
  $c2=0;
  while($row1 = mysqli_fetch_array($res1)) {
    ?>
    <td></td>
    <th ><?php if($c==0){ echo $row1["garden_size"];
            $c=1;}?></th>
        <?php $gg= $row1["garden_size"];
              $gg1= explode("x", $gg);?>
        
        <td><?php if($b1==0){ echo $total=$gg1[0]*$gg2[1];
            $b1=1;}?></td>
      
        <td><img src="<?php echo $row1["gardendetail_image"];?>" width="250" height="150" ></td>
        <td><?php echo $row1["gardendetail_nameseed"];?><?php echo $row1["quotadetail_nameseed"];?></td>
        <td><?php echo $row1["gardendetail_areause"];?></td>
        <td><?php echo $row1["gardendetail_dateplan"];?></td>
        <td></td>
       
      </tr>
      
  <?php  
  
  }
  $d=0;
  $d1=0;
  $d2=0;
  while($row2 = mysqli_fetch_array($res2)) {
    ?>
    <td></td>
    <th ><?php if($d==0){ echo $row2["garden_size"];
            $d=1;}?></th>
        <?php $gg= $row2["garden_size"];
              $gg1= explode("x", $gg);?>
        
        <td><?php if($b1==0){ echo $total=$gg1[0]*$gg2[1];
            $b1=1;}?></td>
      
        <td><img src="<?php echo $row2["gardendetail_image"];?>" width="250" height="150" ></td>
        <td><?php echo $row2["gardendetail_nameseed"];?><?php echo $row2["quotadetail_nameseed"];?></td>
        <td><?php echo $row2["gardendetail_areause"];?></td>
        <td><?php echo $row2["gardendetail_dateplan"];?></td>
       
      </tr>
      
  <?php  
  
  }
  ?>
  </table>
