<!DOCTYPE html>
<html>
<title>ข้อมูลรายละเอียดโควตาผัก</title>
<?php
include("navbar_tot.php");
?>
<head>
<body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
  
  </head>
  <br>
  <br>
<div class="container-fluid">
      <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นด้านบน</button>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
        
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
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            <form action="quotadetail_get.php" method="post" enctype="multipart/form-data"name="add" class="form-horizontal" id="add">
            <div class="form-row">
            <div class="form-group col-md">
            <label for="fname">ชื่อผัก</label><br>
            <input type="text" name="quotadetail_nameseed" class="form-control" size="25"placeholder="ชื่อผัก"onkeypress="not_number(event)" required>
            <input type="hidden" name="quotaid" value="<?php echo $qid ; ?>">
           

            <div class="invalid-feedback">
                      กรุณากรอกชื่อผัก!
                   </div>
             </div>
             <div class="form-group col-md">
            <label for="fname">โควตาที่ต้องการ/กิโลกรัม</label><br>
            <input type="text" name="quotadetail_numall" class="form-control" size="25"placeholder="โควตาที่ต้องการ"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกโควตาที่ต้องการ!
                   </div>
             </div>
            
             <div class="form-group col-md">
            <label for="fname">กำหนดโควตาต่อฟาร์ม</label><br>
            <input type="text" name="quotadetail_number" class="form-control" size="25"placeholder="กำหนดโควตาต่อฟาร์ม"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกกำหนดโควตาต่อฟาร์ม!
                   </div>
             </div>

             <div class="form-group col-md">
            <label for="fname">วันที่ต้องการผลผลิต</label><br>
            <input type="date" name="quota_need" class="form-control" value="<?php echo $qneed;?>"size="25">
            <div class="invalid-feedback">
                      กรุณากรอก!
                   </div>
             </div>
</div>
             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการเพิ่มข้อมูล?')) return true; else return false;"><h5>เพิ่ม</h5></button>
            <button type="reset" class="btn btn-info"style="width:  80px; height:40px;"><h5>รีเซ็ต</h5></button>
            <a class="btn btn-danger" href="quotaall_prise.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
</div>
</form>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                  
                  <th scope="col">ลำดับ</th>
                  <th scope="col">ชื่อผัก</th>
                  <th scope="col">จำนวนที่ต้องการ(กก.)</th>
                  <th scope="col">จำนวนที่รับออเดอร์ไปแล้ว(กก.)</th>
                  <th scope="col">จำนวนที่เหลือ(กก.)</th>
                  <th scope="col">จำนวนโควตาต่อฟาร์ม(กก.)</th>
                  <th scope="col">วันที่ส่งออเดอร์</th>
                  <th scope="col">ฟาร์มที่รับออเดอร์</th>
                  <th scope="col" colspan="3"><center>จัดการ</center></th>
                </tr>
              </thead>
              <tbody>
              
              <?php
   include('connection.php');
  $query ="SELECT * FROM quotadetail,quota  WHERE quota.quota_id = quotadetail.quotadetail_cycle_id
  AND  quotadetail.quotadetail_cycle_id = '$quota_id' ";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>

        <td><center><?php echo $row["quotadetail_id"];?></center></td>
        <td><center><?php echo $row["quotadetail_nameseed"];?></center></td>
        <td><center><?php echo $row["quotadetail_numall"];?></center></td>
        <td><center><?php echo $row["quotadetail_numgone"];?></center></td>
        <td><center><?php echo $row["quotadetail_numremain"];?></center></td>
        <td><center><?php echo $row["quotadetail_number"];?></center></td>
        <td><center><?php echo $row["quota_need"];?></center></td>

        <td> <center><?php
         $q2="SELECT * FROM `cfquota`,farm WHERE  cfquota.cfquota_farm_id = farm.farm_id AND  cfquota_detail_id = '".$row["quotadetail_id"]."'";
        $re = mysqli_query($con,$q2);
        while($roww = mysqli_fetch_array($re)){
         echo $roww["farm_name"]."<br>"; 
        } ?>
        </center></td>
        <td></td>  
      
        <td></td>  
        <td><a href="./quotadetail_check.php? quotadetail_id=<?php echo $row["quotadetail_id"]; ?>"><i class="btn btn-warning">เช็คส่งโควตา</i></a></td>
        <td><a href="./quotadetail_del.php? quotadetail_id=<?php echo $row["quotadetail_id"]; ?>"><i class="fa fa-trash"></i></a></td>
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
