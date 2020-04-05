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
<br><br>
<?php
$district_id = $_GET["district_id"];
$farm_id = $_GET["farm_id"];
?>
<div class="container-fluid">
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
        <h2 style="text-align: center;">ข้อมูลการปลูก<?php  
        include('connection.php'); 
        $query ="SELECT * FROM `farm` WHERE farm_id='$farm_id'"; 
        $res = mysqli_query($con,$query);
         while($row = mysqli_fetch_array($res)) {
        ?> 
        <i class="fa fa-tree">:</i><td><?php echo $row["farm_name"];?></td>
        <?php  }?> </h2>

        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
        <a href="index_farm.php?district_id=<?php echo $district_id ;?>" class="btn btn-danger my-2 my-sm-0" >ย้อนกลับ</a>&nbsp;
          <form class="form-inline">
            <div class="form-group">
          <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="index_farm" />
            </div>
         
          </form>
        </nav>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="index_farm">
              <thead>
                <tr>
                  
                  <th scope="col"><center>ลำดับ</center></th>
                  <th scope="col"><center>รายการ</center></th>
                  <th scope="col"><center>จำนวนโควตาที่ได้รับ/ก.ก.</center></th>
                  <th scope="col"><center>ต้องการผลผลิตวันที่</center></th>
                  <th scope="col"><center>เริ่มปลูกวันที่</center></th>
                  <th scope="col" colspan="4"><center></center></th>
                  </tr>
              </thead>
              <tbody>

              <?php
  include('connection.php');

  
  $farm_id = $_GET["farm_id"];
  $query ="SELECT * FROM cfquota,quotadetail
  WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_farm_id ='$farm_id'"; //farm_id = 13

  $res = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($res)){
    ?>
        <td><center><?php echo $row["cfquota_id"];?></center></td>
        <td><center><?php echo $row["quotadetail_nameseed"];?></center></td>
        <td><center><?php echo $row["quotadetail_number"];?></center></td>
        <td><center><?php echo $row["quotadetail_dateof"];?></center></td>
        <td><center><?php echo $row["cfquota_date_updateone"];?></center></td>
        <td></td>
        <td></td>
 
        <td><a href="./index_farmplan.php?cfquota_id=<?php echo $row["cfquota_id"]; ?>&
        cfquota_date_updateone=<?php echo $row["cfquota_date_updateone"];?>&
        cfquota_image_updateone=<?php echo $row["cfquota_image_updateone"];?>&
        cfquota_note_updateone=<?php echo $row["cfquota_note_updateone"];?>"><i class="btn btn-warning">อัพเดทการปลูก</a></td>
        </tr> <!-- && ส่งค่าหลายค่า-->
  <?php  
  }
  ?>
  
  </table>


  <script src="\Farm\assets\jquery\jquery.js"></script>
    <script src="\Farm\assets\bootstrap\dist\js\bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#index_farm').keyup(function(){
          search_table($(this).val());
        });
        function search_table(value){
          $('#index_farm tr').each(function(){
            var found = 'false';
            $(this).each(function(){
              if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
              {
                found = 'true';
              }
            });
            if(found == 'true')
            {
              $(this).show();
            }
            else
            {
              $(this).hide();
            }
          });
        }
      });
      </script>