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
<script type='text/javascript'>
		 function show1(){
		  document.getElementById('div2').style.display ='none';
      document.getElementById('div1').style.display ='block';
		} 
		function show2(){
		  document.getElementById('div2').style.display = 'block';
      document.getElementById('div1').style.display ='none';
		}		
	</script>
  <style>
		.hide {
			display: none;
		}
		p {
		font-weight: bold;
		}

	</style>

<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>เพิ่มข้อมูลแปลง</h3>
      <div class="w3-container">
      <?php
include('connection.php');
$garden_id = $_GET["garden_id"];
$g_size = $_GET["g_size"];

$query ="SELECT * FROM garden
WHERE garden_id = $garden_id "; //่join 2 ตาราง

$res = mysqli_query($con,$query);
  ?>   
      <h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ขนาดแปลงปลูก : <?php echo $g_size; ?></b></h5>
<br>
  
      <?php 
     include('connection.php');
    $farm_id = $_GET["farm_id"];
    $garden_id = $_GET["garden_id"];
    $gardendetail_id = $_GET["garden_id"];
    $garid= $garden_id;

    //$graden_id = $_GET["graden_id"];
    $query = "SELECT * FROM gardendetail,garden WHERE gardendetail_id = '$gardendetail_id' AND 
    gardendetail.gardendetail_garid = garden.garden_id";
   
    $res = mysqli_query($con, $query);

    ?>

    <form action="owner_detailedit_farmplan_insert2_db.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gardendetail_id" value="<?php echo $gardendetail_id;?>">
        <input type="hidden" name="garden_id" value="<?php echo $garden_id;?>">
        <input type="hidden" name="farm_id" value="<?php echo $farm_id;?>">
       
        <?php
          echo "<div class='w3-row-padding'>";
          echo "<div class='row'>";
         
           //echo "<div class='col-md-1 col-lg-2'>";
						//echo "<h5><input type='radio' name='tab' value='0' onclick='show1();' required='required' /> ผักโควตา</h5>";
				    //echo "</div>";

            echo "<div class='col-md-1 col-lg-2' >";
						echo "<h5><input type='radio' name='tab' value='1' onclick='show2();' required='required' /> ผักปลูกเอง</h5>";
				   	echo "</div>";
         ?>     				
        	<!-- เลือกส่ง -->
          <br><br>

				<div id="div1" class="hide" >
              
              <?php
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$query ="SELECT *
  FROM cfquota as c 
  INNER JOIN quotadetail  as q ON (c.cfquota_detail_id=q.quotadetail_id)
  INNER JOIN farm as u ON (u.farm_id=c.cfquota_farm_id)
  AND u.farm_id = '$farm_id' ORDER BY cfquota_id asc" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<div class="w3-half">
<h5 class="w3-text-grey"> โควตาผัก: </h5>
            <select name="gardendetail_idcfquota" class="form-control" required>
              <option value="gardendetail_idcfquota">โควตาผัก</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["cfquota_id"];?>">
                <?php echo $results["quotadetail_nameseed"]; ?>&nbsp;&nbsp;&nbsp;
                วันส่งโควตา :<?php echo $results["quotadetail_dateof"]; ?>
               
              </option>
              <?php } ?>
            </select>
          </div>
						</optgroup>
          </div>
                  
          <div id="div2" class="" >
           <h5 class="w3-text-grey"> ชื่อผัก: </h5>
             <input class="form-control" type="text"name="gardendetail_nameseed"placeholder="กรุณากรอกชื่อผัก" size="40px" ><br>
              
          </div>
          </div>
       
          <div class="container">
          <div class="row">
          
          <input class="form-control" type="hidden"name="g_size"placeholder="กรุณาเลือก" size="60px" value="<?php echo $g_size?>"><br>
          <input class="form-control" type="hidden"name="balance"placeholder="กรุณาเลือก" size="60px" value="<?php echo $balance?>"><br>
          <input class="form-control" type="hidden"name="number_id"placeholder="กรุณาเลือก" size="60px" value="<?php echo $number_id?>"><br>
          <div class="form-group col-md">
            <h5 class="w3-text-grey"> แปลงที่ : </h5>
          <input class="form-control" type="text"name="number_id"placeholder="กรุณาเลือก" size="60px" ><br>
          </div>
            <div class="form-group col-md">
            <h5 class="w3-text-grey"> พื้นที่ปลูก : </h5>
          <input class="form-control" type="text"name="gardendetail_areause"placeholder="กรุณาเลือก" size="60px" ><br>
          </div>

          <div class="form-group col-md">
          <h5 class="w3-text-grey"> วันที่ปลูก : </h5>
          <input class="form-control" rows="5" id="comment"  type="date" name="gardendetail_dateplan" size=20 placeholder="กรุณากรอกขนาดแปลงผัก"onkeypress="not_number(event)" required><br>
          </div>
                   
          <div class="form-group col-md">
         <h5 class="w3-text-grey"> รูปภาพแปลงปลูก : <img src="images/camara.png"  width="25" height="25"></h5>
         <input type="file"name="gardendetail_image" style="width:230px;">
    
         </div>

</div>
</div>
          </div>
            </div>
            <br>
             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="javascript:history.back(1)"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
         </form>
            
           
     

<table class="table table-bordered">
<br><br><br><br><br><br>


</body>
</html>




           
            
          