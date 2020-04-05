<?php
    include('connection.php');

    $user_flname = $_GET["user_flname"];
    $user_username = $_GET["user_username"];
    $user_password = $_GET["user_password"];
    $user_phone = $_GET["user_phone"]; 
    $user_lavel = $_GET["user_lavel"];
    $district_id = $_GET['district_id'];
    $user_farm = $_GET['user_farm'];
    $farm_location = $_GET['farm_location'];
    

   //check ชื่อผู้ใช้ไม่ให้ซ้ำกัน
    $check = "  
	SELECT  user_username ,district_id
	FROM user  
    WHERE user_username = '$user_username' 
    AND district_id = '$district_id'
	";
    $result1 = mysqli_query($con, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

//insert ลงตาราง user
 $sql = "INSERT INTO user (user_id,user_flname, user_username, user_password,user_phone,user_lavel,district_id,user_farm)
    VALUES('','$user_flname', '$user_username', '$user_password','$user_phone','$user_lavel','$district_id','$user_farm')";
     mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//SELETE ตาราง user เพื่อเรียกค่ามาลงตารางที่ 2 ของ farmuser_id 
$sql3 = "SELECT * FROM user WHERE user_flname='$user_flname' AND user_username='$user_username' ";
$res = mysqli_query($con,$sql3);
$row = mysqli_fetch_array($res);

    
//table2 //insert ลงตาราง farm
$sql2 = "INSERT INTO farm (farm_name,farmuser_id,farm_flname,farm_phone,farm_address,farm_location)
    VALUES('$user_farm','".$row["user_id"]."','$user_flname','$user_phone','$district_id','$farm_location')";
   mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

   header("Location: prise_member.php");

//ปิดการเชื่อมต่อ database
}

?>



