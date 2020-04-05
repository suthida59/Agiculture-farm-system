<!DOCTYPE html>
<html>
<title>ข้อมูลฟาร์มเพิ่มเติม</title>
<?php include('navbar_tot.php'); ?>
<? session_start();
if( isset($_SESSION['user_id']) AND !empty($_SESSION['user_username'])):
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
   
  
  </head>
<br><br>

<div class="container-fluid">
      <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นด้านบน</button>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
      
      <nav class="navbar navbar-right" style="">
        <hr class="">
        <a  href="prise_farm.php" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>

          <?php
       include('connection.php'); 
       $user_id = $_GET["user_id"];
       $query = "SELECT * FROM user as u 
       INNER JOIN farm  as f ON u.user_id=f.farmuser_id
       WHERE u.user_id ='$user_id'
       ORDER BY u.user_id DESC";
       $result = $con->query($query);
       if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        ?>
       <h3><center>ข้อมูลฟาร์ม</center></h3>
        <b><h5> ชื่อฟาร์ม  : </b><?php echo $row["farm_name"];?><br>
        <b><h5> ชื่อเจ้าของฟาร์ม  : </b><?php echo $row["farm_flname"];?><br><br>

        <button class="w3-button w3-teal"><a href="./prise_farm_plan.php?farm_id=<?php echo $row["farm_id"]; ?>"><font color="white"><h5>อัพเดทการปลูก(โควตา)</h5></font></a></button>
        <button class="w3-button w3-indigo"><a href="./prise_farm_garden.php?farm_id=<?php echo $row["farm_id"]; ?>"><font color="white"><h5>ข้อมูลแปลง</h5></font></a></button>
        <button class="w3-button w3-deep-orange"><a href="./prise_farm_historyquota.php?farm_id=<?php echo $row["farm_id"]; ?>&&
        user_id=<?php echo $row["user_id"];?>"><font color="white"><h5>ประวัติการรับโควตา</h5></font></a></button><br><br>
        
        <center><img  src="<?php echo $row["farm_image"];?>" class="img-thumbnail" alt="Cinque Terre" width="600" height="350"> </center><br>
         <b><h5> เบอร์โทร  : </b><?php echo $row["farm_phone"];?><br>
         <b> ที่ตั้ง  : </b><?php echo $row["farm_location"];?><br>
         <b> พิกัดค่า Lat - Long  : </b><?php echo $row["farm_lat"];?>-<?php echo $row["farm_long"];?><br>
        <hr>
  
        </tr>
    <?php  
    }
    } else {
    echo "0 results";
    }

 $con->close();
?>

<body>
</body>
</html>

