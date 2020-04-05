<?php
     include('connection.php');
     
    $cfquota_id = $_POST["cfquota_id"];
    $cfquota_date_updateone = $_POST["cfquota_date_updateone"];
    $cfquota_image_updateone = $_POST["cfquota_image_updateone"];
	$cfquota_note_updateone = $_POST["cfquota_note_updateone"];
	

	$query0 = "SELECT * FROM cfquota WHERE cfquota_id = '$cfquota_id'";
     $res= mysqli_query($con, $query0);
	  $row = mysqli_fetch_array($res);
	  $S1=$row['cfquota_image_updateone'];
	  $S2=$row['cfquota_image_updatetwo'];
	  $S3=$row['cfquota_image_updatethree'];

	  $N1=$row['cfquota_note_updateone'];
	  $N2=$row['cfquota_note_updatetwo'];
	  $N3=$row['cfquota_note_updatethree'];
     //upload image
	$ext = pathinfo(basename($_FILES['cfquota_image_updateone']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path ="./images/".basename($cfquota_image_updateone);
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext!=""){
	$sccess = move_uploaded_file($_FILES['cfquota_image_updateone']['tmp_name'],$upload_path);
	if (success==FALSE)  {
		echo "ไม่สามารถ upload รูปภาพได้";
		exit();
	}
	if(success==TRUE){
		if($S1==''){
			$query = "UPDATE cfquota SET cfquota_image_updateone ='$upload_path'  WHERE cfquota_id='$cfquota_id'";
		mysqli_query($con, $query);
		}elseif($S1!='' && $S2==''){
			$query = "UPDATE cfquota SET cfquota_image_updatetwo ='$upload_path'  WHERE cfquota_id='$cfquota_id'";
		mysqli_query($con, $query);
		}
		elseif($S1!='' && $S2!='' && $S3==''){
			$query = "UPDATE cfquota SET cfquota_image_updatethree ='$upload_path'  WHERE cfquota_id='$cfquota_id'";
		mysqli_query($con, $query);
		
		}elseif($S1!='' &&  $S2!='' && $S3!=''){ 
			header("Location: owner_update_farm.php?cfquota_id=$cfquota_id");//ค่าให้แสดงหน้าเดียวกัน	
		  }
		
	}
    $cfquota_image_updateone = $new_image_name;
}
	if($N1==''){
		$query2 ="UPDATE `cfquota` SET `cfquota_date_updateone`='$cfquota_date_updateone',
		`cfquota_note_updateone`='$cfquota_note_updateone' WHERE `cfquota_id`='$cfquota_id'";
		mysqli_query($con,$query2);
		header("Location: owner_update_farm.php?cfquota_id=$cfquota_id"); //ส่งค่าให้แสดงหน้าเดียวกัน
	}elseif($N1!='' && $N2==''){
		$query2 ="UPDATE `cfquota` SET `cfquota_date_updatetwo`='$cfquota_date_updateone',
		`cfquota_note_updatetwo`='$cfquota_note_updateone' WHERE `cfquota_id`='$cfquota_id'";
		mysqli_query($con,$query2);
		header("Location: owner_update_farm.php?cfquota_id=$cfquota_id"); //ส่งค่าให้แสดงหน้าเดียวกัน	
	}elseif($N1!='' && $N2!='' && $N3==''){
		$query2 ="UPDATE `cfquota` SET `cfquota_date_updatethree`='$cfquota_date_updateone',
		`cfquota_note_updatethree`='$cfquota_note_updateone' WHERE `cfquota_id`='$cfquota_id'";
		mysqli_query($con,$query2);
		header("Location: owner_update_farm.php?cfquota_id=$cfquota_id"); //ส่งค่าให้แสดงหน้าเดียวกัน	

	}elseif($S1!='' &&  $S2!='' && $S3!=''){ 
		echo "<script type='text/javascript'>alert('Wrong Username or Password');
		window.location='owner_update_farm.php?cfquota_id=$cfquota_id'
		</script>";

		//header("Location: owner_update_farm.php?cfquota_id=$cfquota_id"); //ส่งค่าให้แสดงหน้าเดียวกัน	
	  }
	
    
?>

    
