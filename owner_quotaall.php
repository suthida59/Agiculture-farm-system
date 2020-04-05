<!DOCTYPE html>
<html>
<title>ข้อมูลโควตาทั้งหมด</title>
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
        <h2 style="text-align: center;">โควตาทั้งหมด</h2>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
        <a href="owner_index.php" class="btn btn-danger my-2 my-sm-0" >ย้อนกลับ</a>&nbsp;
          <form class="form-inline">
            <div class="form-group">
            <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="owner_search" />
            </div>
          </form>
        </nav>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="owner_table">
              <thead>
                <tr>
                
                <th scope="col">ลำดับ</th>
                  <th scope="col">วันที่</th>
                  <th scope="col">ชื่อโควตา</th>
                  <th scope="col">ลูกค้า</th>
                  <th scope="col">วันที่ต้องการผลผลิต</th>
                  <th scope="col" colspan="5"><center>จัดการ</center></th>
                </tr>
              </thead>
              <tbody>
              
              <?php
   include('connection.php');

  $query ="SELECT * FROM quota 
  INNER JOIN user 
  ON quota.quota_district = user.district_id 
  WHERE   user.district_id = '".$_SESSION["district_id"]."' AND user_id = '".$_SESSION["user_id"]."'";  //user.district_id= 8 , user_id = 14 
  //$query ="SELECT * FROM quota ";  //user.district_id= 8 , user_id = 14 
  //$query ="SELECT * FROM quota";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
        <td><?php echo $row["quota_id"];?></td>
        <td><?php echo $row["quota_date"];?></td>
        <td><?php echo $row["quota_name"];?></td>
        <td><?php echo $row["quota_customer"];?></td>
        <td><?php echo $row["quota_need"];?></td>
        <td></td>

        <td></td>
        <td><a href="./ownerquotaall_detail.php?quota_id=<?php echo $row["quota_id"]; ?>"><i class="btn btn-warning">ดูรายการ</a></td>
        
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

</html>
</html>
<script src="\Farm\assets\jquery\jquery.js"></script>
    <script src="\Farm\assets\bootstrap\dist\js\bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#owner_search').keyup(function(){
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