<?php
include('connection.php');
$gardendetail_id = $_POST["gardendetail_id"];
$gardendetail_nameseed = $_POST["gardendetail_nameseed"];
$gardendetail_dateplan = $_POST["gardendetail_dateplan"];
$gardendetail_image = $_POST["gardendetail_image"];
$gardendetail_areause = $_POST["gardendetail_areause"];
$gardendetail_idcfquota = $_POST["gardendetail_idcfquota"];
$garden_id = $_POST["garden_id"];
$farm_id =$_POST["farm_id"];
$g_size = $_POST["g_size"];
$number_id= $_POST["number_id"];


//upload image
$ext = pathinfo(basename($_FILES['gardendetail_image']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path ="./images/";
$upload_pathh = $image_path.$new_image_name;

//uploading
if($ext!=""){
$sccess = move_uploaded_file($_FILES['gardendetail_image']['tmp_name'],$upload_pathh);
if (success==FALSE)  {
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
}


if(success==TRUE){
    $query =  "INSERT INTO gardendetail (gardendetail_id,gardendetail_garid, gardendetail_nameseed, gardendetail_areause,gardendetail_image,gardendetail_dateplan,number)
    VALUES('','$gardendetail_id', '$gardendetail_nameseed', '$gardendetail_areause','$upload_pathh','$gardendetail_dateplan','$number_id')";
    mysqli_query($con, $query);
}
$gardendetail_image = $new_image_name;
}
          

//echo"$garden_id";
//header("Location: ./owner_detail_farmplan.php?garden_id=$garden_id && farm_id=$farm_id");
header("Location:owner_detail_farmplan.php?garden_id=$garden_id && farm_id=$farm_id&& garden_size=$g_size");


?>
<!--<script>
history.go(-2);
</script> -->