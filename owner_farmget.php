<?php
     include('connection.php');

    
    $farm_image = $_POST["farm_image"];

    //upload image
	$ext = pathinfo(basename($_FILES['farm_image']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path ="images/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	move_uploaded_file($_FILES['farm_image']['tmp_name'],$upload_path);
	$farm_image = $new_image_name;

    $query= "INSERT INTO farm VALUES
    ('','$upload_path')";
    mysqli_query($con, $query);

    header("Location: owner_farm.php");
    ?>
