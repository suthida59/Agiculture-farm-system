<!DOCTYPE html>
<html>
<title>สมาชิกผู้ดูแลระบบวิสาหกิจชุมชน</title>
<?php
include("navbar_tot.php");
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
<body>
<div class="container-fluid">
      <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นด้านบน</button>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
        <h1 style="text-align: center;">ข้อมูลสมาชิกทั้งหมด</h1>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
          <a href="admin_insert.php" class="badge badge-success"><h5>เพิ่มสมาชิก</h5></a>
          <a  href="tot_admin.php" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                  <th scope="col">IDสมาขิก</th>
                  <th scope="col">ชื่อ-สกุล</th>
                  <th scope="col">ชื่อผู้ใช้</th>
                  <th scope="col">รหัสผ่าน</th>
                  <th scope="col">เบอร์โทรศัพท์</th>
                  <th scope="col">ตำแหน่ง</th>
                  <th scope="col">อำเภอ</th>
                  <th scope="col">จังหวัด</th>
                 
                  <th scope="col" colspan="2"><center>จัดการ</center></th>
                </tr>
              </thead>
              <tbody>
  <?php
   include('connection.php');

 // $query ="SELECT * FROM `user` WHERE user.user_lavel = 'Adminวิสาหกิจชุมชน'OR user.user_lavel = 'Admintot'
  //ORDER BY user_id ASC";

//$query = "
//SELECT * FROM user as p 
//INNER JOIN district  as t ON p.district_id=t.district_id 
//ORDER BY p.user_id DESC" or die("Error:" . mysqli_error());
$query = "SELECT * FROM user as p 
INNER JOIN district  as t ON p.district_id=t.district_id
WHERE p.user_lavel ='Adminวิสาหกิจชุมชน'
ORDER BY p.user_lavel = 'Admintot' DESC" or die("Error:" . mysqli_error());

  $res = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($res)) {
    ?>
        <td><?php echo $row["user_id"];?></td>
        <td><?php echo $row["user_flname"];?></td>
        <td><?php echo $row["user_username"];?></td>
        <td><?php echo $row["user_password"];?></td>
        <td><?php echo $row["user_phone"];?></td>
        <td><?php echo $row["user_lavel"];?></td>
        <td><?php echo $row["district_name"];?></td>
        <td><?php echo $row["district_province"];?></td>
        
        <td><a href="./detailtot.php? user_id=<?php echo $row["user_id"]; ?>"><i class="btn btn-warning">ดูข้อมูลเพิ่มเติม</a></td>
        <td><a href="./admin_edit.php? user_id=<?php echo $row["user_id"]; ?>"><i class='fas fa-edit'></i></a></td>
        <td><a href="./admin_del.php? user_id=<?php echo $row["user_id"]; ?>"><i class="fa fa-trash"></i></a></td>
      </tr>
  <?php  
  }
  ?>
  </table>
  </div>
  </div>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>





  

    