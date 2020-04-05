<?php
    include('connection.php');

    $seed_id = $_POST["seed_id"];
    $seed_name = $_POST["seed_name"];
	$seed_namesci = $_POST["seed_namesci"];
	$seed_prise = $_POST["seed_prise"];
    $seed_dateof = $_POST["seed_dateof"];
    $seed_lavel  = $_POST["seed_lavel"];
	$seed_image = $_POST["seed_image"];
	$seed_user_dis = $_POST["seed_user_dis"];

           //upload image
	$ext = pathinfo(basename($_FILES['seed_image']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path ="./images/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext!=""){
	$sccess = move_uploaded_file($_FILES['seed_image']['tmp_name'],$upload_path);
	if (success==FALSE)  {
		echo "ไม่สามารถ upload รูปภาพได้";
		exit();
	}
	if(success==TRUE){
		$query = "UPDATE seed SET seed_image ='$upload_path'  WHERE seed_id='$seed_id'";
		mysqli_query($con, $query);
	}
    $seed_image = $new_image_name;
}
    $query ="UPDATE seed SET seed_name='$seed_name', seed_namesci='$seed_namesci',seed_prise='$seed_prise',seed_lavel='$seed_lavel',
    seed_dateof='$seed_dateof',seed_user_dis='$seed_user_dis' WHERE seed_id='$seed_id'";
    mysqli_query($con,$query);

    header("Location: seed_index.php");
?>