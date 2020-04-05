<!DOCTYPE html>
<html>
<title>ข้อมูลฟาร์ม</title>
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
      
        <h2 style="text-align: center;">ฟาร์มทั้งหมด</h2>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
        <a href="tot_admin.php" class="btn btn-danger my-2 my-sm-0" >ย้อนกลับ</a>&nbsp;
          <form class="form-inline">
            <div class="form-group">
            <h4> <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="admin_search" /><h4>
            </div>
         
          </form>
        </nav>


        


        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <td></td>
                <td></td>
                  <th scope="col">ลำดับ</th>
                  <th scope="col">ชื่อฟาร์ม</th>
                  <th scope="col">อำเภอ</th>
                  <th scope="col">เบอร์โทรติดต่อ</th>
                  <th scope="col">เจ้าของฟาร์ม</th>
                  <th scope="col">รูปภาพ</th>
                  
                </tr>
              </thead>
              <?php
              
   include('connection.php');

  $query ="SELECT * FROM farm,district WHERE farm_id = farm_id
  AND farm.farm_address=district.district_id ";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
    <td></td>
    <td></td>
        <td><?php echo $row["farm_id"];?></td>
        <td><?php echo $row["farm_name"];?></td>
        <td><?php echo $row["district_name"];?>&nbsp;&nbsp;<?php echo $row["district_province"];?></td>
        <td><?php echo $row["farm_phone"];?></td>
        <td><?php echo $row["farm_flname"];?></td>
        <td><img src="<?php echo $row["farm_image"];?>" width="220" height="120" >
       
       
      </tr>
  <?php  
  }
  ?>
  </table>


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