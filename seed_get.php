<?php
     include('connection.php');
     
    $seed_id = $_POST["seed_id"];
    $seed_name = $_POST["seed_name"];
    $seed_namesci = $_POST["seed_namesci"];
    $seed_prise = $_POST["seed_prise"];
    $seed_dateof = $_POST["seed_dateof"];
    $seed_lavel = $_POST["seed_lavel"];
    $seed_image = $_POST["seed_image"];
    $seed_user_dis = $_POST["seed_user_dis"];

    //upload image
	$ext = pathinfo(basename($_FILES['seed_image']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path ="./images/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	move_uploaded_file($_FILES['seed_image']['tmp_name'],$upload_path);
	$seed_image = $new_image_name;

    $query= "INSERT INTO seed VALUES
    ('','$seed_name','$seed_namesci', '$seed_prise', '$seed_dateof','$seed_lavel','$upload_path','$seed_user_dis')";
    mysqli_query($con, $query);

    header("Location: seed_index.php");
    ?>
