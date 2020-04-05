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
$balance = $_POST["balance"];
$number_id= $_POST["number_id"];
$sqltest = "SELECT SUM(gardendetail_areause) as gardendetail_areause FROM gardendetail WHERE gardendetail_garid = '$garden_id' AND number='$number_id'";
$resulttest=mysqli_query($con,$sqltest);
$rowstest = mysqli_fetch_array($resulttest);

//echo $gardendetail_idcfquota;

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
if($gardendetail_areause > $balance){
    echo "<script type=\"text/javascript\">";
echo "alert(\"พื้นที่แปลงเกินข้อมูลที่กำหนด...<<\");";
echo "window.history.back();";
echo "</script>";
exit();
}else{

if(success==TRUE){
    $query =  "INSERT INTO gardendetail (gardendetail_id,gardendetail_garid, gardendetail_nameseed, gardendetail_areause,gardendetail_image,gardendetail_dateplan,number)
    VALUES('','$garden_id', '$gardendetail_nameseed', '$gardendetail_areause','$upload_pathh','$gardendetail_dateplan','$number_id')";
    mysqli_query($con, $query);
}
$gardendetail_image = $new_image_name;
}
          

//echo"$garden_id";
//header("Location: ./owner_detail_farmplan.php?garden_id=$garden_id && farm_id=$farm_id");
header("Location:owner_detail_farmplan.php?garden_id=$garden_id && farm_id=$farm_id&& garden_size=$g_size");

}
?>
<!--<script>
history.go(-2);
</script> -->