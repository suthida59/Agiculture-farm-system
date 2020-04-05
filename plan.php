<!DOCTYPE html>
<html>
<title>เจ้าของฟาร์ม</title>
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
    
        <h2 style="text-align: center;">ข้อมูลการปลูก</h2>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
        <a  ></a>
        <form class="form-inline">
           <h4> <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="plan_search" /><h4>
           <a  href="owner_index.php" class="btn btn-danger" >ย้อนกลับ</a>
        </form>
        
        </nav>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="plan_table">
              <thead>
                <tr>
                                  
                  <th scope="col"><center>รายการ</center></th>
                  <th scope="col"><center>จำนวนโควตาที่ได้รับ/ก.ก.</center></th>
                  <th scope="col"><center>ต้องการผลผลิตวันที่</center></th>
                  <th  scope="col"><center>วันที่เริ่มปลูก</center></th>
                  <th  scope="col"><center>สถานะ</center></th>
                  <th scope="col" colspan="4"><center>จัดการ</center></th>
                  </tr>
              </thead>
              <tbody>

              <?php
  include('connection.php');

  $q2="SELECT * FROM `farm` WHERE `farmuser_id`='".$_SESSION['user_id']."'"; //farmuser_id = 14
  $re = mysqli_query($con,$q2);
  $roww = mysqli_fetch_array($re);


  $query ="SELECT * FROM cfquota,quotadetail
  WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_farm_id ='".$roww["farm_id"]."'"; //farm_id = 13

  $res = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($res)){
    ?>
        
        <td><center><?php echo $row["quotadetail_nameseed"];?></center></td>
        <td><center><?php echo $row["quotadetail_number"];?></center></td>
        <td><center><?php echo $row["quotadetail_dateof"];?></center></td>
        <td><center><?php echo $row["cfquota_date_updateone"];?></center></td>
        
        <?php
      $q3="SELECT * FROM `cfquota` WHERE `cfquota_send`='".$row["cfquota_send"]."' ";
      $ree = mysqli_query($con,$q3);
      $num = mysqli_num_rows($ree);
       
      if($num=="1"){ //ถ้า num = 1
        echo " <td><center><b><font color=\"blue\">ส่งโควตาแล้ว</font></b></center></td>";

       }elseif($row["cfquota_send"]>= "1"){
        echo " <td><center><b><font color=\"blue\">ส่งโควตาแล้ว</font></b></center></td>";
      }else {
        
        echo " <td><center><b><font color=\"red\">ยังไม่ได้ส่งโควตา</font></b></center></td>";
        
     
         }
        ?>
      
    <td><a href="./owner_update_farm.php?cfquota_id=<?php echo $row["cfquota_id"]; ?>&
        cfquota_date_updateone=<?php echo $row["cfquota_date_updateone"];?>&
        cfquota_image_updateone=<?php echo $row["cfquota_image_updateone"];?>&
        cfquota_note_updateone=<?php echo $row["cfquota_note_updateone"];?>"><i class="btn btn-warning">อัพเดทการปลูก</a></td>
        <td><a href="./plan_db.php?cfquota_id=<?php echo $row["cfquota_id"]; ?>"><i class="fa fa-trash"></i></a></td>
    </tr>
    </form>
   
    <?php  } ?> 
  
  </table>
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

    