<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "tot");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$cfquota_image_updateone = $_FILES['cfquota_image_updateone']['name'];
  	// Get text
  	$cfquota_note_updateone = mysqli_real_escape_string($db, $_POST['cfquota_note_updateone']);

  	// image file directory
  	$target = "images/".basename($cfquota_image_updateone);

    
  
      //$sql ="UPDATE `cfquota` SET `cfquota_date_updateone`='$cfquota_date_updateone',
      //`cfquota_note_updateone`='$cfquota_note_updateone' WHERE `cfquota_id`='$cfquota_id'";
	  $sql = "INSERT INTO cfquota (cfquota_image_updateone, cfquota_note_updateone,cfquota_date_updateone) VALUES ('$cfquota_image_updateone', '$cfquota_note_updateone','$cfquota_date_updateone')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['cfquota_image_updateone']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload cfquota_image_updateone";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM cfquota");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
	  echo "<div id='img_div'>";
	  ?>
      	<img src="<?php echo $row["cfquota_image_updateone"];?>" width="120" height="100" >
	  <?php  
		  echo "<p>".$row['cfquota_note_updateone']."</p>";
		  echo "<p>".$row['cfquota_date_updateone']."</p>";
      echo "</div>";
    }
  ?>
   <form action="test.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="size" value="1000000">
  
   <div class="w3-container">
            <div class="col-8">
            <form action="owner_update_farmup.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="cfquota_id" value="<?php echo $cfquota_id;?>">

            <div class="form-row">
            <div class="form-group col-md">
            <h5 class="w3-text-grey">อัพเดทการปลูกครั้งที่ 1: 
            <input type="date" name="cfquota_date_updateone" size="25"placeholder="อัพเดทการปลูกครั้งที่ 1"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณาเลือกวันที่!
                   </div>
             </div>
           
            
             <h5 class="w3-text-grey">รูปภาพ : <img src="images/camara.png"width="25" height="25">
            <input type="file" name="cfquota_image_updateone" size="25"placeholder="เลือกรูปภาพ"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณาเลือกรูปภาพ!
                   </div>
             </div>

             
             <div class="form-group col-md">
             <h5 class="w3-text-grey"> Note :
            <textarea class="form-control" rows="5" id="comment"  type="text" name="cfquota_note_updateone" size="25"placeholder="กรอกรายละเอียด"onkeypress="not_number(event)" required></textarea>
            <div class="invalid-feedback">
                      กรุณากรอกรายละเอียด!
                   </div>
             </div>

             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการเพิ่มข้อมูล?')) return true; else return false;"><h5>เพิ่ม</h5></button>
            <a class="btn btn-danger" href="owner_update_farm.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
  