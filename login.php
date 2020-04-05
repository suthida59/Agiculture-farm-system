<?php 
session_start();
        if(isset($_POST['user_username'])){
				//connection
        require("connection.php");
				//รับค่า user & password
                  $user_username = $_POST['user_username'];
                  $user_password = $_POST['user_password'];
				//query 
                  $sqli="SELECT * FROM user Where user_username='".$user_username."' and user_password='".$user_password."' ";
 
                  $result = mysqli_query($con,$sqli);
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["user_id"] = $row["user_id"];
                      $_SESSION["user"] = $row["user_flname"]." ".$row[""]."  ";
                      $_SESSION["user_lavel"] = $row["user_lavel"];
                      $_SESSION["district_id"] = $row["district_id"];
                      $_SESSION["user_farm"] = $row["user_farm"];
                     
                      if($_SESSION["user_lavel"]=="Adminวิสาหกิจชุมชน"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: admin_prise.php");
                      }
                      if ($_SESSION["user_lavel"]=="เจ้าของฟาร์ม"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                        Header("Location: owner_index.php");
                      }
                      if ($_SESSION["user_lavel"]=="Admintot"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                        Header("Location: tot_admin.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" ชื่อผู้ใช้ หรือ  รหัสผ่าน ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
        }else{
             Header("Location: form.php"); //user & password incorrect back to login again
        }
        
?>