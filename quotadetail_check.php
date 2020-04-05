<?php
include("navbar_tot.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="\Farm\assets\bootstrap\dist\css\glyphicon.css">
    <link rel="stylesheet" type="text/css" href="\Farm\assets\bootstrap\dist\css\style.css">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/jquery.datetimepicker.css" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
    <link href="/Farm/css/table_overtext.css" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <title>แก้ไขข้อมูลโควตา</title>
  </head>
  <br><br> 
  <body>

  <div class="container-fluid">
  <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
        <h3 style="text-align: center;">จัดการเช็คส่งโควตา</h3>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
          <a></a></p>
          <a  href="javascript:history.back(1)" class="btn btn-danger" >ย้อนกลับ</a>
         
        </nav>
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                  <th scope="col">เลขที่โควตา</td>
                  <th scope="col">ฟาร์มที่รับออเดอร์</th>
                  <th scope="col">วันที่ส่งออเดอร์</th>
                  <th scope="col" colspan="6"><center></center></th>
                </tr>
              </thead>
              <tbody>


  <?php
include('connection.php');
$quotadetail_id = $_GET["quotadetail_id"];
$query ="SELECT * FROM quotadetail WHERE quotadetail_id = '$quotadetail_id'";
//echo "$query";
$res = mysqli_query($con,$query);
while($row = mysqli_fetch_array($res)) {
  ?>
  
     <?php
     
       $q2="SELECT * FROM `cfquota`,farm WHERE  cfquota.cfquota_farm_id = farm.farm_id AND  cfquota_detail_id = '".$row["quotadetail_id"]."'";
       $re = mysqli_query($con,$q2);
      while($roww = mysqli_fetch_array($re)){
      ?> 
      <form action="quotadetail_check_db.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="cfquota_id" value="<?php echo $roww["cfquota_id"];?>">

      <tr>
      <td><?php echo $roww["cfquota_id"] ?></td>
      <td><?php echo $roww["farm_name"] ?></td>
      <td><input type="date" name="cfquota_send" id="cfquota_send"  value="<?php echo $roww["cfquota_send"] ?>"/></td>
     
    <?php
      $q3="SELECT * FROM `cfquota` WHERE `cfquota_send`='".$roww["cfquota_send"]."' ";
      $ree = mysqli_query($con,$q3);
      $num = mysqli_num_rows($ree);
      
      if($num=="1"){ //ถ้า num = 1
        echo " <td>ส่งออเดอร์แล้ว</td>";

       }elseif($roww["cfquota_send"]>= "1"){
        echo " <td>ส่งออเดอร์แล้ว</td>";
       }
       else{
        ?>
        <td><button type="submit" class="btn btn-warning" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการส่งออเดอร์?')) return true; else return false;">ส่งออเดอร์</button></td>
     
        <?php } ?>
      
    
    </tr>
    </form>
   
    <?php  } ?> 
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
