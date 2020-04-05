<!DOCTYPE html>
<html>
<title>ข้อมูลรายละเอียดโควตาวันนี้</title>
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
 
<div class="container-fluid">
      <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นด้านบน</button>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
      
      <nav class="navbar navbar-right" style="">
        <hr class="">
        <a  href="owner_quota.php" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>

        
        <?php
       include('connection.php');

        $quota_id = $_GET["quota_id"];
        $query = "SELECT quota_id, quota_date, quota_name ,quota_customer ,quota_need  FROM quota WHERE quota_id = '$quota_id'";
        $res = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($res)) {
                $qid = $row["quota_id"];
                $qneed = $row["quota_need"];

        ?>
        <center><h3> ชื่อโควตา          : <?php echo $row["quota_name"];?></h3></center>
        <center><h5> วันที่              : <?php echo $row["quota_date"];?></h5></center>
        <center><h5> ลูกค้า             : <?php echo $row["quota_customer"];?> </h5></center>
        <center><h5> วันที่ต้องการผลผลิต  :<?php echo $row["quota_need"];?></h5></center> <br>
      
    </tr>
<?php  
}
?>
</table>
         
<div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                  
                  <th scope="col">ลำดับ</th>
                  <th scope="col">ชื่อผัก</th>
                  <th scope="col">จำนวนที่ต้องการ/ก.ก.</th>
                  <th scope="col">จำนวนที่รับออเดอร์ไปแล้ว/ก.ก.</th>
                  <th scope="col">จำนวนที่เหลือ/ก.ก.</th>
                  <th scope="col">จำนวนโควตาต่อฟาร์ม/ก.ก.</th>
                  <th scope="col"></th>
                  
                  <th scope="col" colspan="2"><center></center></th>
                </tr>
              </thead>
              <tbody>
              
              <?php
   include('connection.php');
  $query ="SELECT * FROM quotadetail WHERE quotadetail_cycle_id = '$quota_id' ";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>

        <td><?php echo $row["quotadetail_id"];?></td>
        <td><?php echo $row["quotadetail_nameseed"];?></td>
        <td><?php echo $row["quotadetail_numall"];?></td>
        <td><?php echo $row["quotadetail_numgone"];?></td>
        <td><?php echo $row["quotadetail_numremain"];?></td>
        <td><?php echo $row["quotadetail_number"];?></td>

        <?php  
        $q2="SELECT * FROM `farm` WHERE `farmuser_id`='".$_SESSION['user_id']."'";
        $re = mysqli_query($con,$q2);
        $roww = mysqli_fetch_array($re);


        $q1 = "SELECT * FROM `cfquota` WHERE `cfquota_detail_id`='".$row["quotadetail_id"]."' AND `cfquota_farm_id`='".$roww["farm_id"]."'";
        $ree = mysqli_query($con,$q1);
        $num = mysqli_num_rows($ree);
        
        if($num=="1"){ //ถ้า num = 1
         echo " <td>รับโควต้าแล้ว</td>";

        }else if($row["quotadetail_numremain"]== "0"){
          echo " <td>โควต้าเต็มแล้ว</td>";
          
        }
        else{
          ?>
          <td><a href="./owner_cfquota.php?quotadetail_id=<?php echo $row["quotadetail_id"]; ?>"><i class="btn btn-warning">รับโควตา</a></td>
          <?php
        }
        


        ?>
       
      
      </tr>
  <?php  
  }
  ?>
  
  </table>
     
  </div>
  </div>

  <!--<script> window.location="/quotadetail.php"; </script>-->
  <script>
  </script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
</body>
</html>
</html>
</html>

