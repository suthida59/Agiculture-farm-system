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
<br>
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

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <nav class="navbar navbar-right" style="">
        <a ></a>
        <a  href="javascript:history.back()" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>อัพเดทการปลูก</h3>

<?php
include('connection.php');

$cfquota_id = $_GET["cfquota_id"];
$query ="SELECT * FROM cfquota,quotadetail   
WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_id ='$cfquota_id'"; //่join 2 ตาราง
$res = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($res)) {
  ?>
      <h5 class="w3-text-grey w3-padding-12"><i class="fa fa-book fa-fw fa-fw w3-margin-center w3-large w3-text-teal"></i> <b> ชื่อผัก : </b><?php echo $row["quotadetail_nameseed"];?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  จำนวนโควตาที่ได้รับ(ก.ก.) : </b><?php echo $row["quotadetail_number"];?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ส่งผลผลิตวันที่ : </b><?php echo $row["quotadetail_dateof"];?></h5><br><br>
      
    </tr>
<?php  
}
?>

<div id="content">
<div class="form-row ">
<div class="table-responsive">
<table class="table table-bordered">
<tr>

  <?php
   $query ="SELECT * FROM cfquota,quotadetail   
   WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_id ='$cfquota_id'";
    $res = mysqli_query($con,$query);

    $row = mysqli_fetch_array($res);
     
      $S0=$row["cfquota_note_updateone"];
      $S1=$row["cfquota_note_updatetwo"];
      $S2=$row["cfquota_note_updatethree"];

    if($S0!=''){
      echo "<td><h5> วันที่อัพเดท<br>(เริ่มปลูก) : <br>  ".$row['cfquota_date_updateone']."</h5>";
      echo"  <center><img src=".$row['cfquota_image_updateone']." width='250' ></center><br>";
      echo" <h5> Note : อัพเดทการปลูกครั้งที่ 1   ".$row['cfquota_note_updateone']." </h5><br><br><br></td>";
    }
     if($S1!='' && $S2!=''){
    
       echo "<td> <h5>  วันที่อัพเดท : <br> ".$row['cfquota_date_updatetwo']."</h5>";
       echo "<center><img src=".$row['cfquota_image_updatetwo']." width='250' height='200'></center> <br>";  
       echo "<h5> Note :อัพเดทการปลูกครั้งที่ 2  ".$row["cfquota_note_updatetwo"]." </h5><br><br><br></td> " ;

       echo "<td> <h5> วันที่อัพเดท :  <br> ".$row['cfquota_date_updatethree']."</h5>";
       echo "    <center><img src=".$row['cfquota_image_updatethree']." width='250' height='200'></center>";
       echo "     <h5> Note :อัพเดทผลผลิต  ".$row["cfquota_note_updatethree"]." </h5></td>";
     }elseif($S1!=''){
     
      echo "<td> <h5>  วันที่อัพเดท : <br> ".$row['cfquota_date_updatetwo']."</h5>";
      echo "<center><img src=".$row['cfquota_image_updatetwo']." width='250' height='200'></center> <br>";  
      echo "<h5> Note :อัพเดทการปลูกครั้งที่ 2  ".$row["cfquota_note_updatetwo"]." </h5><br><br><br></td> " ;

     }
     elseif($S2!=''){
      echo " <form method  = 'post'
      onSubmit= 'window.close();'>
 
     </form>";

     }
     

        
  ?> 
 
  </tr>
  </table>