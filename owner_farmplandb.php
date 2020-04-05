<?php
 include('connection.php');
 $farm_id = $_POST["farm_id"];
 $farm_imageplan = $_POST["farm_imageplan"];
 $farm_numplan = $_POST["farm_numplan"];
 $farm_sizeplan = $_POST["farm_sizeplan"];
 $farm_nameseed = $_POST["farm_nameseed"];
 
//upload image
$ext = pathinfo(basename($_FILES['farm_imageplan']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path ="images/";
$upload_path = $image_path.$new_image_name;
//uploading
if($ext!=""){
$sccess = move_uploaded_file($_FILES['farm_imageplan']['tmp_name'],$upload_path);
if (success==FALSE)  {
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
}
if(success==TRUE){
    $query = "UPDATE farm SET farm_imageplan ='$upload_path'  WHERE farm_id='$farm_id'";
    mysqli_query($con, $query);
}
$farm_imageplan = $new_image_name;
}

$query2 ="UPDATE `farm` SET `farm_numplan`='$farm_numplan',
`farm_sizeplan`='$farm_sizeplan',`farm_nameseed`='$farm_nameseed' WHERE `farm_id`='$farm_id'";
mysqli_query($con,$query2);

//echo $query2;
header("Location: owner_farm.php");

?>