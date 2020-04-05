<!DOCTYPE html>
<html>
<title>ข้อมูลส่วนตัว</title>
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
        <a></a>
          <a  href="addmin_tot.php" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
          <div class="container">
      <div class="row ">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="jumbotron">
            <h3 style="text-align:center;">ข้อมูลส่วนตัว</h3>
            
    <?php
       include('connection.php'); 
       $user_id = $_GET["user_id"];
       $query = "SELECT * FROM user as p 
       INNER JOIN district  as t ON p.district_id=t.district_id
       WHERE p.user_id ='$user_id'
       ORDER BY p.user_id DESC";
       $result = $con->query($query);
       if ($result->num_rows > 0) {
    // output data of each row
//    $query = "
//SELECT * FROM user  as p 
//INNER JOIN district  as t ON p.district_id=t.district_id 
//ORDER BY p.user_id DESC" or die("Error:" . mysqli_error());
//$result = $conn->query($query);
  //  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {



         echo  " <h5><br>";
         echo "  ชื่อ-สกุล  : ". $row["user_flname"]."<br>";
         echo "  ชื่อผู้ใช้  : ". $row["user_username"]. "<br>";
         echo  " รหัสผ่าน  : " . $row["user_password"] . "<br>";
         echo  " เบอร์โทรศัพท์  : " . $row["user_phone"] . "<br>";
         echo  " ตำแหน่ง  : " . $row["user_lavel"] . "<br>";
         echo  " อำเภอ  : " . $row["district_name"] . "<br>";
         echo  " จังหวัด  : " . $row["district_province"] . "<br>";
    }
    } else {
    echo "0 results";
    }

 $con->close();
?>

<body>
</body>
</html>
<br><br><br><br>
