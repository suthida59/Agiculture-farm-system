<?php
     include('connection.php');

	$farm_id = $_POST["farm_id"];
    $farm_name = $_POST["farm_name"];
    $farm_address = $_POST["farm_address"];
    $farm_phone = $_POST["farm_phone"];
    $farm_flname = $_POST["farm_flname"];
	$farmuser_id = $_POST["farmuser_id"];
	$farm_location = $_POST["farm_location"];
	$farm_image = $_POST["farm_image"];
	$your_lat = $_POST["your_lat"];
	$your_long = $_POST["your_long"];

           //upload image
	$ext = pathinfo(basename($_FILES['farm_image']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path ="images/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext!=""){
	$sccess = move_uploaded_file($_FILES['farm_image']['tmp_name'],$upload_path);
	if (success==FALSE)  {
		echo "ไม่สามารถ upload รูปภาพได้";
		exit();
	}
	if(success==TRUE){
		$query = "UPDATE farm SET farm_image ='$upload_path'  WHERE farm_id='$farm_id'";
		mysqli_query($con, $query);
	}
    $farm_image = $new_image_name;
}
    $query ="UPDATE farm SET farm_name='$farm_name', farm_address='$farm_address',farm_phone='$farm_phone',
    farm_flname='$farm_flname',farmuser_id='$farmuser_id',farm_location='$farm_location',
	farm_lat = '$your_lat',farm_long = '$your_long' WHERE farm_id='$farm_id'";
    mysqli_query($con,$query);

    header("Location: owner_farm.php");
?>