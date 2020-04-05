<!DOCTYPE html>
<html>
<title>ประวัติโควต้า</title>
<?php
include('connection.php');
include("navbar_tot.php");
error_reporting(~E_NOTICE);
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
  <br><br><br>
  <div class="container-fluid">
      <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นด้านบน</button>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
      <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      
        <h2 class="card-title">เลือกผักที่รับโควตา <a href="historyquota.php" class="btn btn-primary">แสดงรายระเอียดทั้งหมด</a>&nbsp;<a href="owner_index.php" class="btn btn-danger">ย้อนกลับ</a></h2>
        <p class="card-text"></p>
        <table class="table">
          <thead>
          <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ชนิดผัก</th>
          <th scope="col">รายละเอียด</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $q2="SELECT * FROM `farm` WHERE `farmuser_id`='".$_SESSION['user_id']."'"; //farmuser_id = 14
        $re = mysqli_query($con,$q2);
        $roww = mysqli_fetch_array($re);
         $sql1 = "SELECT * FROM cfquota,quotadetail,quota WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id 
        AND quotadetail.quotadetail_cycle_id = quota.quota_id AND cfquota.cfquota_farm_id ='".$roww["farm_id"]."' GROUP BY quotadetail.quotadetail_nameseed";
         $select=$_GET['seed']; 
         $res = mysqli_query($con,$sql1 );
         $x =0;
         while($row = mysqli_fetch_array($res)){ $x++;       
         ?>
        <tr>
          <th scope="row"><?php echo $x;?></th>
          <td><?php echo $row["quotadetail_nameseed"];?></td>
          <td><a href="historyquota.php?seed=<?php echo $row["quotadetail_nameseed"];?>" class="btn btn-warning">แสดงรายระเอียด</a><br></td>
        </tr>
         <?php } ?>
         </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <h3 style="text-align: center;">ประวัติโควต้า</h3>

<div class="table-responsive" style="height:...px">
  <div class="table-wrapper-scroll-y">
    <table class="table table-striped" id="plan_table">
      <thead>
        <tr>
          
          <th scope="col"><center>ลำดับ</center></th>
          <th scope="col"><center>รายการ</center></th>
          <th scope="col"><center>โควตาที่ได้รับ/รอบ</center></th>
          <th scope="col"><center>จำนวนโควตาที่ได้รับ/ก.ก.</center></th>
          <th scope="col"><center>วันที่รับโควตา</center></th>
          <th scope="col" colspan="2"><center></center></th>
          </tr>
      </thead>
      <tbody>

      <?php


$q2="SELECT * FROM `farm` WHERE `farmuser_id`='".$_SESSION['user_id']."'"; //farmuser_id = 14
$re = mysqli_query($con,$q2);
$roww = mysqli_fetch_array($re);

if($select!=null){
$query ="SELECT * FROM cfquota,quotadetail,quota WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id 
AND quotadetail.quotadetail_cycle_id = quota.quota_id AND cfquota.cfquota_farm_id ='".$roww["farm_id"]."' 
AND quotadetail.quotadetail_nameseed = '$select'"; //farm_id = 13
}
else{
  $query ="SELECT * FROM cfquota,quotadetail,quota WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id 
AND quotadetail.quotadetail_cycle_id = quota.quota_id AND cfquota.cfquota_farm_id ='".$roww["farm_id"]."'"; //farm_id = 13
}

$res = mysqli_query($con,$query);
while($row = mysqli_fetch_array($res)){
?>
<td><center><?php echo $row["cfquota_id"];?></center></td>
<td><center><?php echo $row["quotadetail_nameseed"];?></center></td>
<td><center><?php echo $row["quota_name"];?></center></td>
<td><center><?php echo $row["quotadetail_number"];?></center></td>
<td><center><?php echo $row["cfquota_created_at"];?></center></td>
<td></td>
</tr> 
<?php  
}
?>

</table>
      </div>
    </div>
  </div>
</div>
      
  </div>
  </div>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>

</html>
</html>
<script src="\Farm\assets\jquery\jquery.js"></script>
    <script src="\Farm\assets\bootstrap\dist\js\bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#plan_search').keyup(function(){
          search_table($(this).val());
        });
        function search_table(value){
          $('#plan_table tr').each(function(){
            var found = 'false';
            $(this).each(function(){
              if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
              {
                found = 'true';
              }
            });
            if(found == 'true')
            {
              $(this).show();
            }
            else
            {
              $(this).hide();
            }
          });
        }
      });
      </script>

    