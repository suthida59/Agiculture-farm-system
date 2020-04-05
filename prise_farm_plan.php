<!DOCTYPE html>
<html>
<title>ข้อมูลการปลูก</title>
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
    
        <h3 style="text-align: center;">ข้อมูลการปลูก</h3>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
        <a href="javascript:history.back(1)" class="btn btn-danger my-2 my-sm-0" >ย้อนกลับ</a>&nbsp;
          <form class="form-inline">
            <div class="form-group">
          <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="admin_search" />
            </div>
         
          </form>
        </nav>


        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="owner_table">
              <thead>
                <tr>
                  
                  <th scope="col"><center>ลำดับ</center></th>
                  <th scope="col"><center>รายการ</center></th>
                  <th scope="col"><center>จำนวนโควตาที่ได้รับ/ก.ก.</center></th>
                  <th scope="col"><center>ต้องการผลผลิตวันที่</center></th>
                  <th scope="col"><center>เริ่มปลูกวันที่</center></th>
                  <th scope="col" colspan="4"><center></center></th>
                  </tr>
              </thead>
              <tbody>

              <?php
  include('connection.php');

  
  $farm_id = $_GET["farm_id"];
  $query ="SELECT * FROM cfquota,quotadetail
  WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_farm_id ='$farm_id'"; //farm_id = 13

  $res = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($res)){
    ?>
        <td><center><?php echo $row["cfquota_id"];?></center></td>
        <td><center><?php echo $row["quotadetail_nameseed"];?></center></td>
        <td><center><?php echo $row["quotadetail_number"];?></center></td>
        <td><center><?php echo $row["quotadetail_dateof"];?></center></td>
        <td><center><?php echo $row["cfquota_date_updateone"];?></center></td>
        <td></td>
        <td></td>
 
        <td><a href="./prise_farm_planupdate.php?cfquota_id=<?php echo $row["cfquota_id"]; ?>&
        cfquota_date_updateone=<?php echo $row["cfquota_date_updateone"];?>&
        cfquota_image_updateone=<?php echo $row["cfquota_image_updateone"];?>&
        cfquota_note_updateone=<?php echo $row["cfquota_note_updateone"];?>"><i class="btn btn-warning">อัพเดทการปลูก</a></td>
        </tr> <!-- && ส่งค่าหลายค่า-->
  <?php  
  }
  ?>
  
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
        $('#admin_search').keyup(function(){
          search_table($(this).val());
        });
        function search_table(value){
          $('#owner_table tr').each(function(){
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