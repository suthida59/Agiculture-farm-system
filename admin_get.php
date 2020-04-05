<?php
     include('connection.php');
    
  
    $user_flname = $_GET["user_flname"];
    $user_username = $_GET["user_username"];
    $user_password = $_GET["user_password"];
    $user_phone = $_GET["user_phone"]; 
    $user_lavel = $_GET["user_lavel"];
    $district_id = $_GET['district_id'];
   
  //เช็ค
	$check = "
  SELECT  user_flname,district_id
   FROM user  
   WHERE user_flname = '$user_flname' 
   AND district_id='$district_id' ";
 
 
    $result1 = mysqli_query($con, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
         
 
   //เพิ่มข้อมูล
    $sql= "INSERT INTO `user`(`user_id`, `user_flname`, `user_username`, `user_password`, `user_phone`, `user_lavel`, `district_id`)  VALUES
    ('','$user_flname', '$user_username', '$user_password', '$user_phone', '$user_lavel','$district_id')";
     mysqli_query($con, $sql);

     header("Location: addmin_tot.php");
    }
    
    ?>