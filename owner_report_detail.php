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
  <br><br><br><br>
  <div class="container">
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
        <h2 style="text-align:center;">ททท</h2><br>
        <div class="container">
              <nav class="navbar navbar-light" style="">
                <h4> <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="admin_search" /><h4>
                    <a  href="owner_index.php" class="btn btn-danger" ><h5>ย้อนกลับ</h5></a>
                </nav>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="owner_table">
              <thead>
                <tr>
                  <th scope="col"><center>รายการ</center></th>
                  <th scope="col"><center>โควตาที่รับมา/รอบ</center></th>
                  <th scope="col"><center>จำนวนที่รับ</center></th>
                  <th  scope="col"><center>วันที่รับโควต้า</center></th>
                  <th scope="col" colspan="2"><center></center></th>
                  </tr>
              </thead>
              <tbody>

              <?php
  include('connection.php');

  $q2="SELECT * FROM `farm` WHERE `farmuser_id`='".$_SESSION['user_id']."'"; //farmuser_id = 14
  $re = mysqli_query($con,$q2);
  $roww = mysqli_fetch_array($re);

  //select c1,sum(c2) from tb_name group by c1


  $query ="SELECT * FROM cfquota,quotadetail
  WHERE cfquota.cfquota_detail_id = quotadetail.quotadetail_id AND cfquota.cfquota_farm_id ='".$roww["farm_id"]."'"; //farm_id = 13

  $res = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($res)){
    ?>
        
        <td><center><?php echo $row["quotadetail_nameseed"];?></center></td>
        <td></td>
        <td></td>
        <td></td>
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
          $('#admin_table tr').each(function(){
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

     <!-- <input type="date" name="cfquota_plan" id="cfquota_plan" value="date('Y-m-d') ?>">-->